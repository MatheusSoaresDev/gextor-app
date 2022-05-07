<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="@if(Request::is('dashboard')) active @endif"><a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a></li>
                <li class="@if(Request::is('despesa/fixa')) active @endif"><a href="{{ route('despesaFixa') }}"><i class="menu-icon fa fa-refresh"></i>Despesas Fixas </a></li>
                <li class="@if(Request::is('despesa/parcelada')) active @endif"><a href="{{ route('despesaParcelada') }}"><i class="menu-icon fa fa-refresh"></i>Despesas Parceladas </a></li>
            </ul>
        </div>
    </nav>
</aside>
