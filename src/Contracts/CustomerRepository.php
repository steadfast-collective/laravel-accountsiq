<?php

namespace SteadfastCollective\AccountsIQ\Contracts;

interface CustomerRepository
{
    public function get();
    public function getFromDefaults();
    public function update();
}
