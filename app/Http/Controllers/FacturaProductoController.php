<?php

namespace App\Http\Controllers;

use App\Models\FacturaProducto;
use Illuminate\Http\Request;

/**
 * Class FacturaProductoController
 * @package App\Http\Controllers
 */
class FacturaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturaProductos = FacturaProducto::paginate();

        return view('factura-producto.index', compact('facturaProductos'))
            ->with('i', (request()->input('page', 1) - 1) * $facturaProductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facturaProducto = new FacturaProducto();
        return view('factura-producto.create', compact('facturaProducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FacturaProducto::$rules);

        $facturaProducto = FacturaProducto::create($request->all());

        return redirect()->route('factura-productos.index')
            ->with('success', 'FacturaProducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facturaProducto = FacturaProducto::find($id);

        return view('factura-producto.show', compact('facturaProducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facturaProducto = FacturaProducto::find($id);

        return view('factura-producto.edit', compact('facturaProducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FacturaProducto $facturaProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacturaProducto $facturaProducto)
    {
        request()->validate(FacturaProducto::$rules);

        $facturaProducto->update($request->all());

        return redirect()->route('factura-productos.index')
            ->with('success', 'FacturaProducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $facturaProducto = FacturaProducto::find($id)->delete();

        return redirect()->route('factura-productos.index')
            ->with('success', 'FacturaProducto deleted successfully');
    }
}
