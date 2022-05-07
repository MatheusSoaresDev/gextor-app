@extends('headers.header')

@section('title', 'Dashboard')

@include('headers.leftMenu')

<div id="right-panel" class="right-panel">

    @include('headers.topMenu')

    <div class="content">
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
                                        <div class="stat-text">$<span class="count">23569</span></div>
                                        <div class="stat-heading">Revenue</div>
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
                                <div class="stat-icon dib flat-color-2">
                                    <i class="pe-7s-cart"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">3435</span></div>
                                        <div class="stat-heading">Sales</div>
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
                                    <i class="pe-7s-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">349</span></div>
                                        <div class="stat-heading">Templates</div>
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
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7s-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">2986</span></div>
                                        <div class="stat-heading">Clients</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12" style="margin-bottom: 1.875em;">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%;">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <a class="navbar-brand" href="#">Controle Mensal</a>
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <!-- Separator -->
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <div class="row form-group">
                                    <div class="col-12 col-md-12">
                                        <select name="select" id="select" class="form-control" style="width: 250px;">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="orders">
                <!--<div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="cursor: pointer;">
                                    Gastos Mensais
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#despesafixamodal"><i class="fa fa-plus"></i>&nbsp; Adicionar</button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                            <div class="card-body">

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

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="cursor: pointer;">
                                    Gastos Anuais / Parcelados
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#smallmodal"><i class="fa fa-plus"></i>&nbsp; Adicionar</button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Total
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#smallmodal"><i class="fa fa-plus"></i>&nbsp; Adicionar</button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>-->

                <div class="row">
                    <div class="col-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Gastos Mensais</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Anuais ou Parcelados</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Total</a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

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
                                                <tr style="text-align: center;">
                                                    <td> c67a2a05-... </td>
                                                    <td><span class="name">Claro</span></td>
                                                    <td> R$ 100 </td>
                                                    <td>
                                                        <span class="badge badge-complete" style="width:65px;"> Ativo </span>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <form method="POST" action="http://localhost:7000/despesa/fixa/c67a2a05-87d5-41b5-bb06-fc00abc35f14" onsubmit="return confirm('Tem certeza que deseja remover essa despesa?');">
                                                            <input type="hidden" name="_method" value="delete">                                                            <input type="hidden" name="_token" value="LlmWiEPSQr1Y56jzkViPgNxHj1woZM2hfvyssvZo">
                                                            <a data-toggle="tooltip" data-placement="top" title="Editar"><button type="button" class="btn btn-outline-primary btn-sm" onclick="editarDespesa({&quot;id&quot;:&quot;c67a2a05-87d5-41b5-bb06-fc00abc35f14&quot;,&quot;nome&quot;:&quot;Claro&quot;,&quot;valor_base&quot;:100,&quot;status&quot;:1});"><i class="fa fa-edit"></i></button></a>
                                                            <a data-toggle="tooltip" data-placement="top" title="Excluir"><button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-times-circle-o"></i></button></a>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="5" style="text-align: center;"> <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#criardespesafixamodal"><i class="fa fa-plus"></i>&nbsp; Adicionar</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="criardespesafixamodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document" style="max-width: 434px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Registrar despesa do mês</h5>
                </div>
                <form method="POST" action="{{ route('despesaFixa') }}">
                    <div class="modal-body">

                        <div class="row form-group">
                            <div class="col-12 col-md-12">
                                <select name="select" id="select" class="form-control">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                        </div>

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

@extends('headers.footer')
