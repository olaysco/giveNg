<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

interface GivetemRepositoryInterface
{
    public function all(): Collection;
}
