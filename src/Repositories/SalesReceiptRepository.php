<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQFacade;
use SteadfastCollective\AccountsIQ\Contracts\SalesReceiptRepository as Contract;

class SalesReceiptRepository implements Contract
{
    public function saveSalesReceipt($salesReceipt): array
    {
        return AccountsIQFacade::request('SaveSalesReceipt', [
            'salesReceipt' => $salesReceipt,
        ]);
    }

    public function saveSalesReceiptGetBackTransactionID($salesReceipt): array
    {
        return AccountsIQFacade::request('SaveSalesReceiptGetBackTransactionID', [
            'salesReceipt' => $salesReceipt,
        ]);
    }
}
