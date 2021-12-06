<div class="navbar-lateral full-reset">
    <div class="visible-xs font-movile-menu mobile-menu-button"></div>
    <div class="full-reset container-menu-movile custom-scroll-containers">
        <div class="logo full-reset all-tittles">
            <i class="visible-xs fas fa-window-close pull-left mobile-menu-button"
                style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
            Panel de control
        </div>
        <div class="full-reset" style="background-color:#131212; padding: 10px 0; color:#fff;">
            <figure>
                <img src="{{ asset('img/Imagen2.png') }}" alt="C.R.I.S" class="img-responsive center-box"
                    style="width:80%; height:150px;">
            </figure>
            <p class="text-center" style="padding-top: 15px;">Panel de control</p>
        </div>
        <div class="full-reset nav-lateral-list-menu" style="max-height: none;background: #131212;">
            <ul class="list-unstyled">
                <li><a href="{{ route('admin.home') }}"><i class="px-2 py-1 fas fa-home"></i>Inicio</a></li>
                <li>
                    <div class="dropdown-menu-button"><i class="px-1 py-1 fas fa-store-alt"></i>&nbsp;&nbsp;
                        Zonas
                        Comunes <i class="mt-1 fas fa-angle-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.views.index') }}"><i class="fas fa-images"></i>&nbsp;&nbsp;
                                Galeria</a></li>
                    </ul>
                </li>
                <li>
                    @can('admin.users.index')
                        <div class="dropdown-menu-button"><i class="px-1 py-1 fas fa-address-book"></i>&nbsp;&nbsp; Control
                            de Registro <i class="mt-1 fas fa-angle-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('admin.roles.index') }}"><i class="fas fa-id-card"></i>&nbsp;&nbsp;
                                    Roles
                                    y Permisos</a></li>
                            <li><a href="{{ route('admin.users.index') }}"><i class="fas fa-users-cog"></i>&nbsp;&nbsp;
                                    Asignar roles a usuarios</a></li>
                            <li><a href="{{ route('admin.crud_users.index') }}"><i
                                        class="fas fa-user-edit"></i>&nbsp;&nbsp;
                                    Crear, modifica, y elimina usuarios</a></li>
                        </ul>
                    </li>
                @endcan
                <li>
                    <div class="dropdown-menu-button"><i class="px-1 py-1 fas fa-comments"></i>&nbsp;&nbsp; Social <i
                            class="mt-1 fas fa-angle-down pull-right zmdi-hc-fw"></i></div>
                    <ul class="list-unstyled">
                        @can('admin.release.index')
                            <li><a href="{{ route('admin.release.index') }}"><i class="fas fa-list"></i>&nbsp;&nbsp;
                                    Lista de comunicados</a></li>
                        @endcan

                        @can('admin.release.create')
                            <li><a href="{{ route('admin.release.create') }}"><i class="fas fa-file"></i>&nbsp;&nbsp;
                                    Crear nuevos comunicados</a></li>
                        @endcan
                        @can('admin.categories.index')
                            <li><a href="{{ route('admin.categories.index') }}"><i
                                        class="fab fa-fw fa-buffer "></i>&nbsp;&nbsp; Grupo Comunicacional</a></li>
                        @endcan
                    </ul>
                </li>
                <li>
                    <div class="dropdown-menu-button"><i class="px-1 py-1 fas fa-comments-dollar"></i>&nbsp;&nbsp;
                        Estados de cuenta
                        <i class="mt-1 fas fa-angle-down pull-right zmdi-hc-fw"></i>
                    </div>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin.debts.index') }}"><i class="fas fa-receipt "></i>&nbsp;&nbsp;
                                Listar usuarios deudores</a></li>
                        <li>
                            <a href="{{ route('admin.category_debts.index') }}"><i
                                    class="fas fa-file-invoice-dollar"></i>&nbsp;&nbsp; Lista
                                categorias de deudas
                                <span class="label label-danger pull-right label-mhover"></span></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.urgencies.index') }}"><i
                                    class="fas fa-hand-holding-usd"></i>&nbsp;&nbsp; Urgencias de deudas por
                                correo <span class="label label-danger pull-right label-mhover"></span></a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('profile.show') }}"><i class="px-1 py-1 fas fa-user-circle"></i>&nbsp;&nbsp;
                        Perfil</a></li>
                <li><a href="/"><i class="px-1 py-1 fas fa-house-user"></i>&nbsp;&nbsp; Pagina principal</a></li>
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><a href="{{ route('logout') }}" role="menuitem" tabindex="-1" id="user-menu-item-2"
                            onclick="event.preventDefault(); ><i class=" px-1 py-1 fas fa-sign-out-alt"></i>&nbsp;&nbsp;
                            Cerrar
                            sesion</a></li>
                </form> --}}
            </ul>
        </div>
    </div>
</div>
