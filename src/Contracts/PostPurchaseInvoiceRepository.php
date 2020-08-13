<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface PostPurchaseInvoiceRepository
{
    public function postInvoice(int $invoiceId);
}
