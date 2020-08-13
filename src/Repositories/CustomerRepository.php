<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\Contracts\CustomerRepository as ContractsCustomerRepository;

class CustomerRepository implements ContractsCustomerRepository
{
    public function getCustomer(string $customerCode)
    {
        //
    }

    public function getNewCustomerFromDefaults(string $customerCode)
    {
        //
    }

    public function update($customer, bool $create)
    {
        //
    }
}
