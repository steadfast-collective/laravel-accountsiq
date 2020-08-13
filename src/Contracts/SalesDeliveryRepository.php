<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesDeliveryRepository
{
    public function deliveryOrderLines();
    public function get();
}
