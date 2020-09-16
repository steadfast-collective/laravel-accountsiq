<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesOrderRepository
{
    public function getNewSalesOrder(array $params = []);

    public function saveOrder(array $params = []);
}
