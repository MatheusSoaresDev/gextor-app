@extends('headers.header')

@section('title', 'Despesas Fixas')

@include('headers.leftMenu')

<div id="right-panel" class="right-panel">

    @include('headers.topMenu')

    <div class="content">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Houve um erro!</h4>
                <p>@error('nome') {{ $message }} @enderror</p>
            </div>
        @endif
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-1">
                                    <i class="pe-7s-cash"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text">R$&nbsp
                                            {{ $despesasUsuario->where('status', 1)->sum('valor_base') }}
                                        </div>
                                        <div class="stat-heading">Valor total das despesas ativas</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7s-news-paper"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text">
                                            {{ $despesasUsuario->where('status', 1)->count() }}
                                        </div>
                                        <div class="stat-heading">Despesas Ativas</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib color-red">
                                    <i class="pe-7s-less"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text">
                                            {{ $despesasUsuario->where('status', 0)->count() }}
                                        </div>
                                        <div class="stat-heading">Despesas Inativas</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="title-card d-flex justify-content-between align-items-center">
                                    <h4 class="box-title">Despesas Fixas</h4>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#smallmodal"><i class="fa fa-plus"></i>&nbsp; Adicionar</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-stats order-table ov-h">
                                    <table class="table" style="margin-bottom: 15rem;">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Valor Base</th>
                                                <th>Status</th>
                                                <th style="text-align: center;">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if($despesasUsuario->count() == 0) <tr><td colspan="5" style="text-align: center;"> Não há despesas fixas cadastradas! </td></tr> @endif
                                            @foreach($despesasUsuario->sortByDesc('status') as $despesas)
                                                <tr style="text-align: center;">
                                                    <td> {{ mb_strimwidth($despesas->id,  0, 12, "...") }} </td>
                                                    <td><span class="name">{{ $despesas->nome }}</span></td>
                                                    <td> R$ {{ $despesas->valor_base }} </td>
                                                    <td>
                                                        @if($despesas->status == 1)
                                                            <span class="badge badge-complete" style="width:65px;"> Ativo </span>
                                                        @else
                                                            <span class="badge badge-pending" style="width:65px;"> Inativo </span>
                                                        @endif
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <form method="POST" action="{{ route('deleteDespesaFixa', $despesas->id) }}" onsubmit="return confirm('Tem certeza que deseja remover essa despesa?');">
                                                            @method('delete')
                                                            {{ csrf_field() }}
                                                            <a data-toggle="tooltip" data-placement="top" title="Editar"><button type="button" class="btn btn-outline-primary btn-sm" onclick="editarDespesa({{ $despesas }});"><i class="fa fa-edit"></i></button></a>
                                                            <a data-toggle="tooltip" data-placement="top" title="Excluir"><button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-times-circle-o"></i></button></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document" style="max-width: 434px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Criar despesa</h5>
                </div>
                <form method="POST" action="{{ route('despesaFixa') }}">
                    <div class="modal-body">

                        <div class="form-group"><label for="nome" class=" form-control-label">Nome da despesa</label><input type="text" id="nome_despesa" name="nome" placeholder="Nome da despesa" class="form-control" minlength="2" required></div>
                        <div class="form-group"><label for="valor_base" class=" form-control-label">Valor Base</label><input type="text" id="valor_base" name="valor_base" placeholder="Valor base da despesa" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true" required></div>
                        {{ csrf_field() }}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document" style="max-width: 434px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Editar despesa</h5>
                </div>

                <form method="POST" action="{{ route('editarDespesaFixa') }}">
                    <div class="modal-body">

                        @method('PUT')
                        <input type="hidden" name="id" id="id_despesa_editar">

                        <div class="form-group">
                            <label for="nome" class="form-control-label">Nome da despesa</label>
                            <input type="text" id="nome_despesa_editar" value="" name="nome" placeholder="Nome da despesa" class="form-control" minlength="5" required>
                        </div>

                        <div class="form-group">
                            <label for="valor_base" class="form-control-label">Valor Base</label>
                            <input type="text" id="valor_base_editar" value="" name="valor_base" placeholder="Valor base da despesa" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true" required>
                        </div>

                        <div class="form-group">
                            <select name="status" id="status" class="form-control">
                                <option value="0">Inativo</option>
                                <option value="1">Ativo</option>
                            </select>
                        </div>

                        {{ csrf_field() }}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
    .traffic-chart {
        min-height: 335px;
    }
    #flotPie1  {
        height: 150px;
    }
    #flotPie1 td {
        padding:3px;
    }
    #flotPie1 table {
        top: 20px!important;
        right: -10px!important;
    }
    .chart-container {
        display: table;
        min-width: 270px ;
        text-align: left;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    #flotLine5  {
        height: 105px;
    }

    #flotBarChart {
        height: 150px;
    }
    #cellPaiChart{
        height: 160px;
    }

</style>

<script>

    function editarDespesa(despesa) {
        jQuery("#id_despesa_editar").val(despesa.id);
        jQuery("#nome_despesa_editar").val(despesa.nome);
        jQuery("#valor_base_editar").val(despesa.valor_base);
        jQuery("#status").val(despesa.status);
        jQuery('#modalEditar').modal('show');
    }

</script>

@extends('headers.footer')
