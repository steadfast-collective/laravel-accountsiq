<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface PostSalesInvoiceRepository
{
    public function createBatchSalesInvoice($invoice);
    public function getNewBatchSalesInvoice(string $customerCode);
    public function getNewSalesInvoice(string $customerCode);
    public function postPayAndAllocateSalesInvoice($query);
}