<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesOrderRepository
{
    public function getNewSalesOrder(string $customerCode);
}
