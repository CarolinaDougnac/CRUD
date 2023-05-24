<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col"> 
                <div class="form-group">
                    {{ Form::label('folio') }}
                    {{ Form::text('folio', $factura->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
                    {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('proveedor') }}
                    {{ Form::select('proveedore_id',$proveedores, $factura->proveedore_id, ['class' => 'form-control' . ($errors->has('proveedore_id') ? ' is-invalid' : ''), 'placeholder' => 'Proveedore Id']) }}
                    {!! $errors->first('proveedore_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('fecha_emision') }}
                    {{ Form::date('fecha_emision', $factura->fecha_emision, ['class' => 'form-control' . ($errors->has('fecha_emision') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Emision']) }}
                    {!! $errors->first('fecha_emision', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('fecha_reception') }}
                    {{ Form::date('fecha_reception', $factura->fecha_reception, ['class' => 'form-control' . ($errors->has('fecha_reception') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Reception']) }}
                    {!! $errors->first('fecha_reception', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Buscar producto</h5>
        <p class="card-text"> 
            <div class='search'>
                <form action="{{ route('facturas.index') }}" method="GET">
                <div class="input-group mb-3">
                <input type="text" name="busqueda" class="form-control" placeholder="Buscar Producto" aria-label="Buscar Producto" aria-describedby="button-addon2">
                <button type="submit" value="enviar" class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
                
                </div>
                </form>
            </div>
        </p>
    </div>
</div>