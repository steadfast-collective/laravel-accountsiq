<?php

namespace SteadfastCollective\AccountsIQ\Exceptions;

use Exception;

class InvalidObjectOrArgumentException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message, 2);
    }
}
