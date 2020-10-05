<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQFacade;
use SteadfastCollective\AccountsIQ\Contracts\SalesOrderRepository as Contract;

class SalesOrderRepository implements Contract
{
    public function getNewSalesOrder(array $data = []): array
    {
        return AccountsIQFacade::request('GetNewSalesOrder', $data);
    }

    public function saveOrder(array $data = []): array
    {
        return AccountsIQFacade::request('SaveOrder', $data);
    }
}
