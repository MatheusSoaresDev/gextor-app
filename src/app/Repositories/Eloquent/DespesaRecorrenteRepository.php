<?php

namespace App\Repositories\Eloquent;

use App\Models\DespesaRecorrente;
use App\Repositories\Contracts\DespesaRecorrenteRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class DespesaRecorrenteRepository extends AbstractRepository implements DespesaRecorrenteRepositoryInterface
{
    protected $model = DespesaRecorrente::class;

    public function all()
    {
        return parent::all()->orderBy('status', 'desc')->orderBy('valor_base', 'desc')->get();
    }
}
