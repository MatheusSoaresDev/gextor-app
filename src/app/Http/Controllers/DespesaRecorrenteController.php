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
        $somaTotalDespesaFixa = $this->despesaRecorrenteRepository->somaTotalDespesaFixa();

        return view('DespesasFixas', compact('despesasUsuario', 'somaTotalDespesaFixa'));
    }

    public function create(CreateDespesaFixaRequest $request)
    {
        $despesa = $this->despesaRecorrenteRepository->create($request->all());
        if($despesa){
            return redirect("despesas/fixas")->withSuccess('Despesa cadastrada com sucesso!');
        }
        return redirect("despesas/fixas")->withErrors('Não foi possivel cadastrar a despesa!');
    }

    public function update(UpdateDespesaRecorrenteRequest $request)
    {
        $despesa = $this->despesaRecorrenteRepository->update($request->all());
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
