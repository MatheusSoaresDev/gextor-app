<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\DespesaParceladaRepositoryInterface;
use Illuminate\Http\Request;

class DespesaParceladaController extends Controller
{
    private DespesaParceladaRepositoryInterface $despesaParceladaRepository;

    public function __construct(DespesaParceladaRepositoryInterface $despesaParceladaRepository)
    {
        $this->despesaParceladaRepository = $despesaParceladaRepository;
    }

    public function index()
    {
        //$despesasUsuario = $this->despesaParceladaRepository->all();

        return view('DespesaParcelada', /*compact('despesasUsuario')*/);
    }
}
