<?php

namespace SteadfastCollective\AccountsIQ\Exceptions;

use Exception;

class FtpServerNotRespondingException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message, 16);
    }
}
