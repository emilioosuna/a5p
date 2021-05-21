<div class="form-group">
    {{ Form::label('name', 'Nombre del Rol') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
     <table id="datatable2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="15px">Opc</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
        @foreach($permissions as $permission)
            <tr>
                <td width="15px">{{ Form::checkbox('permissions[]', $permission->id, null) }}</td>
                <td> {{ $permission->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
