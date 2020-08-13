<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\Contracts\ProductStockItemRepository as ContractsProductStockItemRepository;

class ProductStockItemRepository implements ContractsProductStockItemRepository
{
    public function getStockItem(string $stockItemId)
    {
        //
    }

    public function getStockItemDefaults()
    {
        //
    }

    public function getStockItemList()
    {
        //
    }

    public function saveStockItem($stockItem, bool $create)
    {
        //
    }

    public function getStockItemLocationStatus(array $stockItemIds)
    {
        //
    }
}
