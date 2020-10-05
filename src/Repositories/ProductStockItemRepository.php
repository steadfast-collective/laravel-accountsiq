<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\Contracts\ProductStockItemRepository as Contract;

class ProductStockItemRepository implements Contract
{
    public function getStockItem(string $stockItemId): array
    {
        // TODO
    }

    public function getStockItemDefaults(): array
    {
        // TODO
    }

    public function getStockItemList(): array
    {
        // TODO
    }

    public function saveStockItem($stockItem, bool $create): array
    {
        // TODO
    }

    public function getStockItemLocationStatus(array $stockItemIds): array
    {
        // TODO
    }
}
