<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $producto_id
 * @property $cantidad
 * @property $estado_id
 * @property $vencimiento
 * @property $factura_id
 * @property $precio_venta
 * @property $precio_balance
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @property Factura $factura
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    static $rules = [
		'producto_id' => 'required',
		'cantidad' => 'required',
		'estado_id' => 'required',
		'vencimiento' => 'required',
		'factura_id' => 'required',
		'precio_venta' => 'required',
		'precio_balance' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['producto_id','cantidad','estado_id','vencimiento','factura_id','precio_venta','precio_balance'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function factura()
    {
        return $this->hasOne('App\Models\Factura', 'id', 'factura_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    

}
