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

use Exception;

class LazadaException extends Exception
{
    public function __construct($message = "", $code = 0)
    {
        $this->message = $message;
        $this->code = $code;
    }
}
