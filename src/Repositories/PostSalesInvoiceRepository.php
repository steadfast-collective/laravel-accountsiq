<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQ;
use SteadfastCollective\AccountsIQ\Contracts\PostSalesInvoiceRepository as ContractsPostSalesInvoiceRepository;

class PostSalesInvoiceRepository implements ContractsPostSalesInvoiceRepository
{
    public $accountsIQ;

    public function __construct()
    {
        $this->accountsIQ = new AccountsIQ();
    }

    public function createBatchSalesInvoice($invoice)
    {
        //
    }

    public function getNewBatchSalesInvoice(string $customerCode)
    {
        //
    }

    public function getNewSalesInvoice(string $customerCode)
    {
        //
    }

    public function postPayAndAllocateSalesInvoice($query)
    {
        //
    }

    public function saveInvoice(array $params = [])
    {
        return $this->accountsIQ->request('SaveInvoice', $params);
    }

    public function saveInvoiceGetBackInvoiceID(array $params = [])
    {
        return $this->accountsIQ->request('SaveInvoiceGetBackInvoiceID', $params);
    }
}
