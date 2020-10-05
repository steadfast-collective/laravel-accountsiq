<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface PostSalesInvoiceRepository
{
    public function createBatchSalesInvoice($invoice): array;

    public function getNewBatchSalesInvoice(string $customerCode): array;

    public function getNewSalesInvoice(string $customerCode): array;

    public function postPayAndAllocateSalesInvoice($query): array;

    public function saveInvoice(array $data = []): array;

    public function saveInvoiceGetBackInvoiceID(array $data = []): array;
}
