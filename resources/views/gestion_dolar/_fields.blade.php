
<!-- Para protejer la página de ataques POST (token) -->
{{ csrf_field() }}
<div class="card card">
    <div class="card-header bg-black">
        <h5 class="card-title ">Gestion Dolar</h5>
        <div class="float-right">
            <a href="{{ route('GestionDolar.index') }}">
                <img src="{{ asset('adminlte/icons/back.png') }}" width="48px" title="volver"></a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-4">
                <label for="stipod">Tipo Divisa</label>
                <select id="stipod" name="stipod" class="form-control select2bs4">
                        <option value="">Escoja Tipo</option>
                        <option value="1">BCV $</option>
                        <option value="2">BCV E</option>
                </select>
            </div>
            <div class="form-group col-4">
                <label for="factu">Fecha Atualizacion</label>
                <input  type="factu" id="factu" name="factu" value="{{ old('factu', $fechaactualizacion) }}" class="form-control text-center"  maxlength="14" max="14" readonly>

            </div>
            <div class="form-group col-2">
                <label for="valord">Monitor</label>
                <input  type="text" id="valord" name="valord" value="{{ old('valord') }}" class="form-control text-right"  onkeypress="return justNumbers(event);">
            </div>

            <div class="form-group col-2">
                <label for="statusd">Estatus Divisa</label>
                <select id="statusd" name="statusd" class="form-control select2bs4">
                        <option value="0">Sin Activar</option>
                        <option value="1" selected>Activa</option>
                </select>
            </div>

        </div>
    </div>
</div>
