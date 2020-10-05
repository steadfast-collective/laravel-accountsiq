<?php

namespace SteadfastCollective\AccountsIQ;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SteadfastCollective\AccountsIQ\AccountsIQ
 */
class AccountsIQFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AccountsIQ';
    }
}
