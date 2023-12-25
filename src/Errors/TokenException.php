<?php
/*
 * This file is part of PHP Lazada Client.
 *
 * (c) Jin <j@sax.vn>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EcomPHP\Lazada\Errors;

class TokenException extends ResponseException
{
    public function __construct($message = "", $code = 0)
    {
        if (!$message) {
            $message = $this->getMessageByCode($code);
        }

        parent::__construct($message, $code);
    }

    public function getMessageByCode($code)
    {
        $errors = [
            'IllegalRefreshToken' => 'The specified refresh token is invalid or expired',
            'IllegalAccessToken' => 'The specified access token is invalid or expired',
        ];

        return $errors[$code] ?? 'The token is invalid or expired';
    }
}
