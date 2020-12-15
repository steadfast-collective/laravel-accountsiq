<?php

namespace SteadfastCollective\AccountsIQ\Logging;

interface Logger
{
    public function log(string $message, array $data = []);
}
