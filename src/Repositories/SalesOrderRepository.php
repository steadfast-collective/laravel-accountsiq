<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQ;
use SteadfastCollective\AccountsIQ\Contracts\SalesOrderRepository as ContractsSalesOrderRepository;

class SalesOrderRepository implements ContractsSalesOrderRepository
{
    public $accountsIQ;

    public function __construct()
    {
        $this->accountsIQ = new AccountsIQ();
    }

    public function getNewSalesOrder(array $params = [])
    {
        return $this->accountsIQ->request('GetNewSalesOrder', $params);
    }

    public function saveOrder(array $params = [])
    {
        return $this->accountsIQ->request('SaveOrder', $params);
    }
}
