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
        return $this->model->all();
    }

    public function create(array $data)
    {
        $despesa = new $this->model();
        $despesa->nome = $data["nome"];
        $despesa->valor_base = $data["valor_base"];
        $despesa->id_user = Auth::id();

        return $despesa->save();
    }

    public function update(array $data)
    {
        $despesa = $this->get($data["id"]);
        $despesa->nome = $data["nome"];
        $despesa->valor_base = $data["valor_base"];

        return $despesa->save();
    }

    public function get(string $id)
    {
        return $this->model->where('id', $id)->first();
    }

    public function delete(string $data)
    {
        // TODO: Implement delete() method.
    }
}
