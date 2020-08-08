<?php

namespace App\Repository;

use App\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }
}
