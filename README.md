# Lazada API PHP SDK — Modern PHP Client for Lazada Open Platform

[![Total Downloads](https://poser.pugx.org/ecomphp/lazada-php/downloads)](https://packagist.org/packages/ecomphp/lazada-php)
[![Latest Stable Version](https://poser.pugx.org/ecomphp/lazada-php/v/stable)](https://packagist.org/packages/ecomphp/lazada-php)
[![Latest Unstable Version](https://poser.pugx.org/ecomphp/lazada-php/v/unstable)](https://packagist.org/packages/ecomphp/lazada-php)
[![License](https://poser.pugx.org/ecomphp/lazada-php/license)](https://packagist.org/packages/ecomphp/lazada-php)

A powerful, lightweight, and developer-friendly **Lazada API PHP SDK** designed to integrate **Lazada Open Platform** into vanilla PHP applications, Laravel, or Symfony projects.

Easily manage Lazada OAuth authentication, automate access token generation, refresh tokens, sync products, fetch orders, and call seller APIs with minimal configuration.

---

## 📦 Installation

Install the **Lazada PHP Client** via [Composer](https://getcomposer.org/):

```shell
composer require ecomphp/lazada-php
```

---

## 🛠️ Configuration & Setup

Initialize the **Lazada Client** using your app credentials provided by the Lazada Open Platform Console:

```php
use EcomPHP\Lazada\Client;

$app_key = 'your_app_key_here';
$app_secret = 'your_app_secret_here';
$callback_url = 'https://your-app.com/lazada/callback';

$client = new Client($app_key, $app_secret, $callback_url);
```

The SDK supports Lazada regions: `vn`, `sg`, `my`, `th`, `ph`, and `id`.

---

## 🔐 Lazada API OAuth Authentication

The SDK provides a dedicated `Auth` class to handle Lazada's OAuth authorization flow, access tokens, and refresh tokens.

```php
$auth = $client->auth();
```

### Step 1: Create the Authentication Request URL

Generate the authorization redirect URL for the seller to grant permissions:

```php
$state = 'your-csrf-or-tracking-state';
$country = 'vn'; // Optional: vn, sg, my, th, ph, id

// Returns the Lazada authentication URL instead of auto-redirecting
$authUrl = $auth->createAuthRequest($state, $country, true);

// Redirect user to Lazada Authorization page
header('Location: ' . $authUrl);
exit;
```

### Step 2: Handle Redirect Callback & Fetch Access Token

Once authorized, Lazada redirects the user back to your callback URL with an authorization code. Exchange it for your API tokens:

```php
$authorization_code = $_GET['code'];

// Exchange code for Access Token & Refresh Token
$token = $auth->getToken($authorization_code);

$access_token = $token['access_token'];
$refresh_token = $token['refresh_token'];

// IMPORTANT: Save your access_token, refresh_token, and seller region to your database for later use
```

### Step 3: Set Authorized Seller Credentials

To make authorized calls on behalf of a specific seller, attach the access token and region to your client instance:

```php
$access_token = 'your_stored_access_token';
$region = 'vn';

$client->setAccessToken($access_token, $region);
```

---

## 🔄 Refreshing Expired Access Tokens

Lazada access tokens expire. Automate token renewal using your persistent `refresh_token`:

```php
$new_token = $auth->refreshNewToken($refresh_token);

$new_access_token = $new_token['access_token'];
$new_refresh_token = $new_token['refresh_token'];
```

---

## 🚀 Lazada API Usage Examples

> **Note:** A valid `access_token` and seller `region` are required to interact with seller-level data.

### 1. Get Product List

Fetch product information from your Lazada store:

```php
$products = $client->Product->GetProducts([
    'offset' => 0,
    'limit' => 50,
    'filter' => 'all',
]);
```

### 2. Get Product Item

Retrieve a single product by Lazada item ID:

```php
$product = $client->Product->GetProductItem('123456789');
```

### 3. Get Order List & Order Items

Retrieve recent orders and their order items:

```php
$orders = $client->Order->GetOrders([
    'created_after' => '2026-07-01T00:00:00+0800',
    'status' => 'pending',
]);

$orderItems = $client->Order->GetOrderItems('123456789');
```

### 4. Update Order Status to Ready to Ship

Set order items as ready to ship:

```php
$result = $client->Order->SetStatusToReadyToShip(
    ['123456789'],
    'Dropshipping Provider',
    'TRACKING_NUMBER'
);
```

---

## 🧩 Available API Resources

The client exposes Lazada API groups as resource properties, including:

- `System`
- `Seller`
- `Order`
- `Finance`
- `Product`
- `ProductReview`
- `StoreDecoration`
- `MediaCenter`
- `Flexicombo`
- `SellerVoucher`
- `FreeShipping`
- `ReturnAndRefund`
- `Fulfillment`
- `Logistic`
- `LazadaLogistics`
- `Wallet`
- `SponsoredSolutions`
- `ServiceMarket`
- `LazLive`
- `Content`

Example:

```php
$categoryTree = $client->Product->GetCategoryTree();
$sellerInfo = $client->Seller->GetSeller();
```

---

## 🧪 Testing

Run the test suite with Composer:

```shell
composer test
```

---

## 🤝 Contributing

Contributions, feature suggestions, and bug reports for the **ecomphp/lazada-php** client are highly appreciated. Feel free to open issues or submit Pull Requests!

## 📄 License

This project is open-source software licensed under the [Apache License 2.0](LICENSE).