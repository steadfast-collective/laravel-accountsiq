<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface CustomerStatementRepository
{
    public function getCustomersStatement($upTo, array $customerCodes, bool $showZeros);
}
