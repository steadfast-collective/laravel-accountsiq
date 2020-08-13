<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\Contracts\PostSalesInvoiceRepository as ContractsPostSalesInvoiceRepository;

class PostSalesInvoiceRepository implements ContractsPostSalesInvoiceRepository
{
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
}
