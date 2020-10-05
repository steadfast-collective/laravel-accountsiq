<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQFacade;
use SteadfastCollective\AccountsIQ\Contracts\DepartmentRepository as Contract;

class DepartmentRepository implements Contract
{
    public function getDepartmentList(): array
    {
        return AccountsIQFacade::request('GetDepartmentList');
    }
}
