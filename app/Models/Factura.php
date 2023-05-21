<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $proveedore_id
 * @property $fecha_emision
 * @property $fecha_reception
 * @property $created_at
 * @property $updated_at
 * @property $folio
 *
 * @property FacturaProducto[] $facturaProductos
 * @property Inventario[] $inventarios
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'proveedore_id' => 'required',
		'fecha_emision' => 'required',
		'fecha_reception' => 'required',
		'folio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['proveedore_id','fecha_emision','fecha_reception','folio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturaProductos()
    {
        return $this->hasMany('App\Models\FacturaProducto', 'factura_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario', 'factura_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedore_id');
    }
    /** Relacion Muchos a Muchos */
    public function productos(){
        return $this->belongsToMany('App\Models\Producto');
    }
}
