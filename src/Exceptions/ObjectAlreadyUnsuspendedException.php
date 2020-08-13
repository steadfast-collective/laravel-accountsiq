<?php

namespace SteadfastCollective\Vesta\Exceptions;

use Exception;

class ObjectAlreadyUnsuspendedException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message, 6);
    }
}
