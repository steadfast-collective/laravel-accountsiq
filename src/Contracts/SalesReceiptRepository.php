<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface SalesReceiptRepository
{
    public function saveSalesReceipt($salesReceipt);
    public function saveSalesReceiptGetBackTransactionID($salesReceipt);
}
