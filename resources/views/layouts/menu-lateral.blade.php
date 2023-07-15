<!-- Main Sidebar Container -->

{{-- Tirar ou colocar a barra de rolagem: --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-y: scroll">
    <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4" style=""> -->

    <!-- Brand Logo -->
    <a href="https://sistema.bentleybrasil.com.br/home" class="brand-link" style="
    display: flex;
    flex-flow: row;
    align-items: center;
    justify-content: center;">
        <span class="brand-text font-weight-light">
            {{-- <img height="80" src="https://sistema.bentleybrasil.com.br/img/logo-empresa-br.png"> --}}
            <img height="80" src="../../../img/logo-empresa-br.png">
        </span>
    </a>

    <br>

    <!-- Sidebar -->
    <div class="info" style="
    display: flex;
    flex-flow: row;
    align-items: center;
    justify-content: center;">
        <div class="col">
            <a class="d-block">{{ Auth::user()->name }}</a>
        </div>

        <div class="col">
            <a class="btn btn-danger btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Sair
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

             <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

            {{-- <li class="nav-item"> --}} {{-- Para recolher o menu da barra lateral --}}
            <li class=" nav-item menu-open">{{-- Para deixar o menu sempre aberto --}}
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="nav-icon fas fa-satellite-dish"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}

                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users nav-icon"></i>
                    <p>
                        Usuários
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}?tipo=fornecedor" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Lista de usuários</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Representantes
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('representantes.index') }}?" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Representantes</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Clientes
                        <i class="right fas fa-angle-left"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('clientes.index') }}?" class="nav-link">
                            <i class="fas fa-address-card nav-icon"></i>
                            <p>Lista de Clientes</p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Chamados
                        <i class="right fas fa-angle-left"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('chamados.index') }}?" class="nav-link">
                            <i class="fas fa-address-card nav-icon"></i>
                            <p>Chamados</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-circle-down"></i>
                    <p>
                        Contratos
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('contratos.index') }}" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Contratos</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('modelocontratos.index') }}" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Layout de contratos</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}

                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-satellite-dish"></i>
                    <p>
                        Planos
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    {{-- <li class="nav-item"> --}}
                    <li class="nav-item">
                        <a href="{{ route('planos.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Planos</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Designações
                        <i class="right fas fa-angle-left"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('designacoes.index') }}" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Designações</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Migrações
                        <i class="right fas fa-angle-left"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('migracoes.index') }}?" class="nav-link">
                            <i class="fas fa-list-alt nav-icon"></i>
                            <p>Lista de Migrações</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                    <p>
                        Instalações
                        <i class="right fas fa-angle-left"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('instalacoes.index') }}?" class="nav-link">
                            <i class="fas fa-address-card nav-icon"></i>
                            <p>Lista de Instalações</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                {{-- <li class="nav-item menu-open"> --}}{{-- Para deixar o menu sempre aberto --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-money-check-alt"></i>
                    <p>
                        Instaladores
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('tecnicos.index') }}" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Lista de Instaladores</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('historicos.index') }}#" class="nav-link">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Histórico dos Instaladores</p>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="nav-item"> {{-- Para recolher o menu da barra lateral --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-satellite-dish"></i>
                    <p>
                        Estoques
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-arrow-circle-down"></i>
                            <p>
                                Ferramentas
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('ferramentas.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Lista de Ferramentas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-arrow-circle-down"></i>
                            <p>
                                Equipamentos
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('antenas.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Antenas</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('cabos.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Cabos</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('fontes.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Fontes</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('grooves.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Grooves</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('lnbs.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Lnbs</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('ilnbs.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Ilnbs</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('modens.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Modens</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('roteadores.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Roteadores</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('trias.index') }}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Trias</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            {{-- </li> --}}

            <li class="nav-item">
                <a href="#" class="nav-link"
                    onclick="
                window.open(
                  'https://beta.simet.nic.br/widget.html',
                  'Bentley Brasil - Teste de velocidade',
                  'height=300,width=800,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Testar Velocidade</p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
</aside>
