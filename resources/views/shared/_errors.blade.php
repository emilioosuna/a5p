 <!-- Muestra errores de cualquier formualario -->
@if ($errors->any())
    <div class="alert alert-danger msg">
        <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h6>Por favor corregir los siguientes errores:</h6>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 @if(Session::has('err'))
    <div class="alert alert-danger msg">
        <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b>Información</b>
        <ul>
           <li>{{Session::get('err')}}</li>
        </ul>
    </div>
@endif
 @if(Session::has('info'))
    <div class="alert alert-warning msg">
        <button type="buttom" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <b>Información</b>
        <ul>
           <li>{{Session::get('info')}}</li>
        </ul>
    </div>
@endif
