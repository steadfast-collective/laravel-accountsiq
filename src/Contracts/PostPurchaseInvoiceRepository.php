<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface PostPurchaseInvoiceRepository
{
    public function getNew();
    public function getBatch();
    public function store();
    public function storeBatch();
    public function postInvoice();
}
