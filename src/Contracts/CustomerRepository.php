<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface CustomerRepository
{
    public function getCustomer(array $data): array;
    public function getNewCustomerFromDefaults(array $data): array;
    public function update(array $customer, bool $create): array;
}
