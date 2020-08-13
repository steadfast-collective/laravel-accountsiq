<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesOrderRepository
{
    public function get();
    public function getNew();
    public function getByCustomer();
}
