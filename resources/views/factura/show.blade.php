@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? "{{ __('Show') Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $factura->proveedore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Emision:</strong>
                            {{ $factura->fecha_emision }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Reception:</strong>
                            {{ $factura->fecha_reception }}
                        </div>
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $factura->folio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
