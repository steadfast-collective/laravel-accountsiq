<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface GeneralLedgerJournalRepository
{
    public function createGeneralJournal(string $journal);
}
