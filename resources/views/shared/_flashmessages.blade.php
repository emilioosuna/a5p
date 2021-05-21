 <!-- Muestra mensajes alerta o información en cualquier formualario -->
@foreach (['danger', 'warning', 'success', 'info'] as $key)
 @if(Session::has($key))
 <div class="alert alert-{{ $key }} msg">
        <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b>Información</b>
        <ul>
           <li>{{ Session::get($key) }}</li>
        </ul>
    </div>
 @endif
@endforeach
