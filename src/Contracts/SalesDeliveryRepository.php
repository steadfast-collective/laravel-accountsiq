<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesDeliveryRepository
{
    public function getDeliveryRouteList();
    public function getNewDeliveryLine($line);
}
