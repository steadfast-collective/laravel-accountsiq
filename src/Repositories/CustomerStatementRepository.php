<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\Contracts\CustomerStatementRepository as Contract;

class CustomerStatementRepository implements Contract
{
    public function getCustomersStatement($upTo, array $customerCodes, bool $showZeros): array
    {
        // TODO
    }
}
