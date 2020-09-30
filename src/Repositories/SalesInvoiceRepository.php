<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQ;
use SteadfastCollective\AccountsIQ\Contracts\SalesInvoiceRepository as ContractsSalesInvoiceRepository;
use SteadfastCollective\AccountsIQ\Exceptions\ResponseException;

class SalesInvoiceRepository implements ContractsSalesInvoiceRepository
{
    public $accountsIQ;

    public function __construct()
    {
        $this->accountsIQ = new AccountsIQ();
    }

    public function createBatchSalesInvoiceBulkGetBackTransactionIDs(array $params)
    {
        $request = $this->accountsIQ->request('CreateBatchSalesInvoiceBulkGetBackTransactionIDs', $params);

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
