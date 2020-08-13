<?php

namespace SteadfastCollective\AccountsIQ\Exceptions;

use Exception;

class ObjectDoesntExistException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message, 3);
    }
}
