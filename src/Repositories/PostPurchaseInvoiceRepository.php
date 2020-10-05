<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQFacade;
use SteadfastCollective\AccountsIQ\Contracts\PostPurchaseInvoiceRepository as Contract;

class PostPurchaseInvoiceRepository implements Contract
{
    public function postInvoice(int $invoiceId): array
    {
        return AccountsIQFacade::request('PostInvoice', [
            'invoiceId' => $invoiceId,
        ]);
    }
}
