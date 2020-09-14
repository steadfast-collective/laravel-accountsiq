<?php

namespace SteadfastCollective\AccountsIQ\Repositories;

use SteadfastCollective\AccountsIQ\AccountsIQ;
use SteadfastCollective\AccountsIQ\Contracts\DepartmentRepository as ContractsDepartmentRepository;

class DepartmentRepository implements ContractsDepartmentRepository
{
    public $accountsIQ;

    public function __construct()
    {
        $this->accountsIQ = new AccountsIQ();
    }

    public function getDepartmentList()
    {
        return $this->accountsIQ->request('GetDepartmentList');
    }
}
