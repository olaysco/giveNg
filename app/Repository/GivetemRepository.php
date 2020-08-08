<?php

namespace App\Repository;

use App\Contracts\GivetemRepository as GivetemRepositoryInterface;
use App\Givetem;
use App\Http\Resources\GivetemResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class GivetemRepository extends BaseRepository implements GivetemRepositoryInterface
{
    public function __construct(Givetem $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return collect(GivetemResource::collection(Givetem::with('giver')->get()));
    }

    public function create(array $data): Model
    {
        $givetem = Givetem::create($data);
        return $givetem;
    }
}
