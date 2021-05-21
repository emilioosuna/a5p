 <!-- Muestra mensajes alerta o información en cualquier formualario -->
 @if(Session::has('mms'))
    <div class="alert alert-success msg">
        <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b>Información</b>
        <ul>
           <li>{{Session::get('mms')}}</li>
        </ul>
    </div>
@endif