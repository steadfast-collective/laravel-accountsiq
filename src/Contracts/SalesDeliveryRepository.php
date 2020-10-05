<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesDeliveryRepository
{
    public function getDeliveryRouteList(): array;

    public function getNewDeliveryLine($line): array;
}
