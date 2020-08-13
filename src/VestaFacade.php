<?php

namespace SteadfastCollective\Vesta;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SteadfastCollective\Vesta\Vesta
 */
class VestaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vesta';
    }
}
