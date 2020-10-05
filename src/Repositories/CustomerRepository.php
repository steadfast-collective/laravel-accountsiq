<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQFacade;
use SteadfastCollective\AccountsIQ\Contracts\CustomerRepository as Contract;

class CustomerRepository implements Contract
{
    public function getCustomer(array $data): array
    {
        return AccountsIQFacade::request('GetCustomer', $data);
    }

    public function getNewCustomerFromDefaults(array $data): array
    {
        return AccountsIQFacade::request('GetCustomerFromDefaults', $data);
    }

    public function update(array $customer, bool $create): array
    {
        return AccountsIQFacade::request('UpdateCustomer', [
            'customer'  => $customer,
            'create'    => $create,
        ]);
    }
}
