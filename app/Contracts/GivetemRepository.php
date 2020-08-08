<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

interface GivetemRepository
{
    public function all(): Collection;
}
