
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="/uplouds/users/{{ Auth::user()->foto}} " style="width: 50px; height: 50px;" />
                </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{!! Auth::user()->name !!}</strong>
                    </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{!! url('/trabalhador/profile') !!}">Profile</a></li>
                        <li><a href="{!! url('/clientes/contacts') !!}">Contactos</a></li>
                        <li class="divider"></li>
                        <li><a href="{!! url('/logout') !!}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>

           <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
            <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Clientes</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="{!! route('clientes.index') !!}">Registar</a></li>
                <li><a href="{!! url('/clientes/contacts') !!}">Contactos</a></li>
                <li><a href="{!! url('/clientes/listar') !!}">Listagem</a></li>
            </ul>
        </li>

         <li class="{{ Request::is('trabalhadors*') ? 'active' : '' }}">
            <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Trabalhadores</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="{!! route('trabalhadors.index') !!}">Registar</a></li>
                <li><a href="{!! url('/trabalhadors/profile') !!}">Profile</a></li>
                <li><a href="{!! url('/trabalhadors/listar') !!}">Listagem</a></li>
            </ul>
        </li>

        <li class="{{ Request::is('produtos*') ? 'active' : '' }}">
            <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Produtos</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="{!! route('produtos.index') !!}">Registar</a></li>
                <li><a href="{!! url('/produtos/grid') !!}">Grade de Produtos</a></li>
                <li><a href="{!! url('/produtos/listar') !!}">Listagem</a></li>
                <li><a href="{!! url('/produtos/detalhes') !!}">Detalhes</a></li>
            </ul>
        </li>

         <li class="{{ Request::is('projectos*') ? 'active' : '' }}">
            <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Projectos</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="{!! route('projectos.index') !!}">Novo projecto</a></li>
                <li><a href="{!! url('/projectos/alocacao') !!}">Alocação</a></li>
                <li><a href="{!! url('/projectos/evolucao') !!}">Evolução</a></li>
                <li><a href="{!! url('/projectos/falhas') !!}">Falhas</a></li>
                <li><a href="{!! url('/projectos/detalhes') !!}">Detalhes</a></li>
                <li><a href="{!! url('/projectos/lista') !!}">Listagem</a></li>
            </ul>
        </li>

        <li>
            <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Relatórios</span><span class="fa arrow"></span></a>
            <ul class="nav nav-second-level collapse">
                <li><a href="{!! url('/relatorio') !!}">Relatórios</a></li>
            </ul>
        </li>
            