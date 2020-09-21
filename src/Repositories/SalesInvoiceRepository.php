<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQ;
use SteadfastCollective\AccountsIQ\Contracts\SalesInvoiceRepository as ContractsSalesInvoiceRepository;

class SalesInvoiceRepository implements ContractsSalesInvoiceRepository
{
    public $accountsIQ;

    public function __construct()
    {
        $this->accountsIQ = new AccountsIQ();
    }

    public function createBatchSalesInvoiceBulkGetBackTransactionIDs(array $params)
    {
        return $this->accountsIQ->request('CreateBatchSalesInvoiceBulkGetBackTransactionIDs', $params);
    }
}
