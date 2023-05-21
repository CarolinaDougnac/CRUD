@extends('layouts.app')

@section('template_title')
    {{ $inventario->name ?? "{{ __('Show') Inventario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $inventario->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $inventario->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Id:</strong>
                            {{ $inventario->estado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vencimiento:</strong>
                            {{ $inventario->vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Factura Id:</strong>
                            {{ $inventario->factura_id }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Venta:</strong>
                            {{ $inventario->precio_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Balance:</strong>
                            {{ $inventario->precio_balance }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
