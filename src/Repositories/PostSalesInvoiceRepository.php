<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQFacade;
use SteadfastCollective\AccountsIQ\Contracts\PostSalesInvoiceRepository as Contract;

class PostSalesInvoiceRepository implements Contract
{
    public function createBatchSalesInvoice($invoice): array
    {
        return AccountsIQFacade::request('CreateBatchSalesInvoice', $invoice);
    }

    public function getNewBatchSalesInvoice(string $customerCode): array
    {
        return AccountsIQFacade::request('GetNewBatchSalesInvoice', [
            'customerCode' => $customerCode,
        ]);
    }

    public function getNewSalesInvoice(string $customerCode): array
    {
        return AccountsIQFacade::request('GetNewSalesInvoice', [
            'customerCode' => $customerCode,
        ]);
    }

    public function postPayAndAllocateSalesInvoice($query): array
    {
        return AccountsIQFacade::request('PostPayAndAllocateSalesInvoice', $query);
    }

    public function saveInvoice(array $data = []): array
    {
        return AccountsIQFacade::request('SaveInvoice', $data);
    }

    public function saveInvoiceGetBackInvoiceID(array $data = []): array
    {
        return AccountsIQFacade::request('SaveInvoiceGetBackInvoiceID', $data);
    }
}
