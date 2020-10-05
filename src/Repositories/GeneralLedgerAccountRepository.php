<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQFacade;
use SteadfastCollective\AccountsIQ\Contracts\GeneralLedgerAccountRepository as Contract;

class GeneralLedgerAccountRepository implements Contract
{
    public function getGLAccountList(): array
    {
        return AccountsIQFacade::request('GetGLAccountList');
    }
}
