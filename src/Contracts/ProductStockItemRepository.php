<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface ProductStockItemRepository
{
    public function getStockItem(string $stockItemId);
    public function getStockItemDefaults();
    public function getStockItemList();
    public function saveStockItem($stockItem, bool $create);
    public function getStockItemLocationStatus(array $stockItemIds);
}
