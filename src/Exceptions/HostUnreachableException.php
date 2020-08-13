<?php

namespace SteadfastCollective\Vesta\Exceptions;

use Exception;

class HostUnreachableException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message, 15);
    }
}
