<?php

namespace App\Repositories\Eloquent;

use App\Models\DespesaRecorrente;
use App\Repositories\Contracts\DespesaRecorrenteRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class DespesaRecorrenteRepository extends AbstractRepository implements DespesaRecorrenteRepositoryInterface
{
    protected $model = DespesaRecorrente::class;

    public function create(array $data)
    {
        $data["id_user"] = Auth::id();
        return parent::create($data);
    }
}
