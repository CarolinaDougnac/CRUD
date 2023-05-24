@extends('adminlte::page')

@section('title', 'Recepcion')

@section('content_header')
    <h1>Recepcion de factura y productos</h1>
@stop

@section('content')
    <p>Has ingresado al administrador de Bodega</p>
    <div>
        

        <div class="card">
            <h1>Factura</h1>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            {{ Form::label('proveedor') }}
                            {{ Form::text('Proveedor') }}
                            {!! $errors->first('proveedore_id', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Folio: ') }}
                            {{ Form::text('nombre') }}
                            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    
                    </div>

                    <div class="col">
                        <div class="form-group">
                            {{ Form::label('Fecha Emision: ') }}
                            {{ Form::text('Emision') }}
                            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                        <div class="form-group">
                            {{ Form::label('Fecha Recepcion: ') }}
                            {{ Form::text('Recepcion') }}
                            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <h1>Productos</h1>
            <div class="card-body">
                
            </div>
        </div>                
        <ul>
          
        </ul>
        <p>Total: $1000</p>
      </div>
      
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
