<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface CustomerRepository
{
    public function getCustomer(string $customerCode);
    public function getNewCustomerFromDefaults(string $customerCode);
    public function update($customer, bool $create);
}
