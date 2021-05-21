<style>
ul li{
 font-size:12px;
text-transform: uppercase;
}
</style>
@php
    $roluser=auth()->user()->roles()->first()->id;
    //dd($roluser);
@endphp
    <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link">
            <img src="{{ asset('adminlte/icons/home1.png') }}" width="24px" title="Inicio">
            Inicio
        </a>
    </li>
@if ($roluser<=2)
   <li class="dropdown-divider"></li>
    <li class="nav-item has-treeview">
  <a href="#" class="nav-link"><img src="{{ asset('adminlte/icons/herramientas.png') }}" width="24px" title="Herrmientas"> <p>Herrmientas Sistema</p> <i class="right fa fa-angle-left"></i></a>
  <ul class="nav nav-treeview">
     @can('gestion_usuarios')
        <li class="nav-item">
            <a href="{{ route('gestion_usuarios') }}" class="nav-link">
                <img src="{{ asset('adminlte/icons/estudiante.png') }}" width="24px" title="Usuarios">
                Usuarios
            </a>
        </li>
    @endcan

    @can('roles.index')
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link">
                <img src="{{ asset('adminlte/icons/roluser.png') }}" width="24px;" title="Roles y Permisos">
                Roles y Permisos
            </a>
        </li>
    @endcan

    @can('GestionDolar.index')
        <li class="nav-item">
            <a href="{{ route('GestionDolar.index') }}" class="nav-link">
                <img src="{{ asset('adminlte/icons/tasac.png') }}" width="24px;" title="Gestión de Tasas de Cambio">
                Gestión de Tasas de Cambio
            </a>
        </li>
    @endcan

  </ul>
</li>
@endif
   <li class="dropdown-divider"></li>
    <li class="nav-item">
        <a href="{{ route('soporte') }}" class="nav-link">
            <img src="{{ asset('adminlte/icons/soporte.png') }}" width="24px" title="Soporte Técnico en Línea">
            Soporte Técnico en Línea
        </a>
    </li>
   <li class="dropdown-divider"></li>
    <li class="nav-item">
        <a href="{{ route('musuario') }}" class="nav-link">
            <img src="{{ asset('adminlte/icons/muser.png') }}" width="24px" title="Manual del Usuario">
            Manual del Usuario
        </a>
    </li>
   <li class="dropdown-divider"></li>
    <li class="nav-item">
        <a href="{{ route('creditos') }}" class="nav-link">
            <img src="{{ asset('adminlte/icons/creditos.png') }}" width="24px" title="Créditos">
            Créditos
        </a>
    </li>

    <li class="dropdown-divider"></li>

    <li class="nav-item">
        <a href="pages/gallery.html" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i>
                <img src="{{ asset('adminlte/icons/salida.png') }}" width="24px;" title="Salir del Sistema">
            </i>
            Salir del Sistema
        </a>

        <form id="logout-form" action="{{ route('salir') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
