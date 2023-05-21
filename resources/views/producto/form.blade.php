<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_barra') }}
            {{ Form::text('cod_barra', $producto->cod_barra, ['class' => 'form-control' . ($errors->has('cod_barra') ? ' is-invalid' : ''), 'placeholder' => 'Cod Barra']) }}
            {!! $errors->first('cod_barra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::select('marca_id',$marcas, $producto->marca_id, ['class' => 'form-control' . ($errors->has('marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Marca Id']) }}
            {!! $errors->first('marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tienda') }}
            {{ Form::text('tienda_id', $producto->tienda_id, ['class' => 'form-control' . ($errors->has('tienda_id') ? ' is-invalid' : ''), 'placeholder' => 'Tienda Id']) }}
            {!! $errors->first('tienda_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bodega') }}
            {{ Form::select('bodega_id',$bodegas, $producto->bodega_id, ['class' => 'form-control' . ($errors->has('bodega_id') ? ' is-invalid' : ''), 'placeholder' => 'Bodega Id']) }}
            {!! $errors->first('bodega_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>