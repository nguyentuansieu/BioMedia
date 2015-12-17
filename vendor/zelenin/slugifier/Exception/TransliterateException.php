<?php

namespace Zelenin\Slugifier\Exception;

use ErrorException;

class TransliterateException extends ErrorException
{
    public function __construct($message = '', $code = 0)
    {
        parent::__construct($message, $code);
    }
}
