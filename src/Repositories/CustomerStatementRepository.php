<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\Contracts\CustomerStatementRepository as ContractsCustomerStatementRepository;

class CustomerStatementRepository implements ContractsCustomerStatementRepository
{
    public function getCustomersStatement($upTo, array $customerCodes, bool $showZeros)
    {
        //
    }
}
