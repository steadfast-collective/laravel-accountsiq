<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesReceiptRepository
{
    public function store();
    public function allocateTransactions();
}
