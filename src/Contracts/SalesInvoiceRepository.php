<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesInvoiceRepository
{
    public function createBatchSalesInvoiceBulkGetBackTransactionIDs(array $params);
}
