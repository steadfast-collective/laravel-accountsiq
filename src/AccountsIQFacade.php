<?php

namespace SteadfastCollective\AccountsIQ;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SteadfastCollective\AccountsIQ\AccountsIQ
 */
class AccountsIQFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'AccountsIQ';
    }
}
