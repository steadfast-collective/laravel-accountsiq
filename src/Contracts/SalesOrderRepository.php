<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesOrderRepository
{
    public function getNewSalesOrder(array $data = []): array;

    public function saveOrder(array $data = []): array;
}
