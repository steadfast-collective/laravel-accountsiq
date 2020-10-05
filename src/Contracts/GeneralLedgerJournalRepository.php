<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface GeneralLedgerJournalRepository
{
    public function createGeneralJournal(array $data): array;
}
