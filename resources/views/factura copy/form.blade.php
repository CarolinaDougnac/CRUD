<div class="box box-info padding-1">
    <div class="box-body">
        
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
        <div class="form-group">
            {{ Form::label('fecha_emision') }}
            {{ Form::text('fecha_emision', $factura->fecha_emision, ['class' => 'form-control' . ($errors->has('fecha_emision') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Emision']) }}
            {!! $errors->first('fecha_emision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_reception') }}
            {{ Form::text('fecha_reception', $factura->fecha_reception, ['class' => 'form-control' . ($errors->has('fecha_reception') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Reception']) }}
            {!! $errors->first('fecha_reception', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>