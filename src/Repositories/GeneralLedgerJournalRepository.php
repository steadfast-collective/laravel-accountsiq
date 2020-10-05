<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQFacade;
use SteadfastCollective\AccountsIQ\Contracts\GeneralLedgerJournalRepository as Contract;

class GeneralLedgerJournalRepository implements Contract
{
    public function createGeneralJournal(array $data): array
    {
        return AccountsIQFacade::request('CreateGeneralJournal', $data);
    }
}
