<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQFacade;
use SteadfastCollective\AccountsIQ\Contracts\SalesInvoiceRepository as Contract;
use SteadfastCollective\AccountsIQ\Exceptions\ResponseException;

class SalesInvoiceRepository implements Contract
{
    public function createBatchSalesInvoiceBulkGetBackTransactionIDs(array $params): array
    {
        $request = AccountsIQFacade::request('CreateBatchSalesInvoiceBulkGetBackTransactionIDs', $params);

        if (isset($request['CreateBatchSalesInvoiceBulkGetBackTransactionIDsResult']['Result']['WSResultStatus'])) {
            foreach ($request['CreateBatchSalesInvoiceBulkGetBackTransactionIDsResult']['Result']['WSResultStatus'] as $key => $result) {
                if ($result['Status'] === 'Failure') {
                    throw new ResponseException("[$key] ".$result['ErrorCode'].' - '.$result['ErrorMessage']);
                }
            }
        }

        return $request;
    }
}
