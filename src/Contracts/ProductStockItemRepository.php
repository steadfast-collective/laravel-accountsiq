<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface ProductStockItemRepository
{
    public function getStockItem(string $stockItemId): array;

    public function getStockItemDefaults(): array;

    public function getStockItemList(): array;

    public function saveStockItem($stockItem, bool $create): array;

    public function getStockItemLocationStatus(array $stockItemIds): array;
}
