<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDespesaFixaRequest;
use App\Http\Requests\UpdateDespesaRecorrenteRequest;
use App\Repositories\Contracts\DespesaRecorrenteRepositoryInterface;
use Illuminate\Http\Request;

class DespesaRecorrenteController extends Controller
{
    private DespesaRecorrenteRepositoryInterface $despesaRecorrenteRepository;

    public function __construct(DespesaRecorrenteRepositoryInterface $despesaRecorrenteRepository)
    {
        $this->despesaRecorrenteRepository = $despesaRecorrenteRepository;
    }

    public function index()
    {
        $despesasUsuario = $this->despesaRecorrenteRepository->all();

        return view('DespesasFixas', compact('despesasUsuario'));
    }

    public function create(CreateDespesaFixaRequest $request)
    {
        $data = $request->except("_token");

        $despesa = $this->despesaRecorrenteRepository->create($data);
        if($despesa){
            return redirect("despesas/fixas")->withSuccess('Despesa cadastrada com sucesso!');
        }
        return redirect("despesas/fixas")->withErrors('Não foi possivel cadastrar a despesa!');
    }

    public function update(UpdateDespesaRecorrenteRequest $request)
    {
        $data = $request->except("_token", '_method');

        $despesa = $this->despesaRecorrenteRepository->update($data);
        if($despesa){
            return redirect("despesas/fixas")->withSuccess('Despesa alterada com sucesso!');
        }
        return redirect("despesas/fixas")->withErrors('Não foi possivel alterar a despesa!');
    }

    public function delete(string $id)
    {
        $despesa = $this->despesaRecorrenteRepository->delete($id);
        if($despesa){
            return redirect("despesas/fixas")->withSuccess('Despesa removida com sucesso!');
        }
        return redirect("despesas/fixas")->withErrors('Não foi possivel remover a despesa!');
    }
}
