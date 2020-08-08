<?php

namespace App\Repository;

use App\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
