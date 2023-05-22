@extends('adminlte::page')

@section('template_title')
    {{ __('Update') }} Factura Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Factura Producto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('factura-productos.update', $facturaProducto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('factura-producto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
