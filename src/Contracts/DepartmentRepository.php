<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface DepartmentRepository
{
    public function getDepartmentList(): array;
}
