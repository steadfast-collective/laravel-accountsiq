<?php

namespace SteadfastCollective\Vesta\Exceptions;

use Exception;

class ObjectIsSuspendedException extends Exception
{
    public function __construct($message = null)
    {
        parent::__construct($message, 5);
    }
}
