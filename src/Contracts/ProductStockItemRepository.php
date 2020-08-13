<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface ProductStockItemRepository
{
    public function get();
    public function getList();
    public function store();
}
