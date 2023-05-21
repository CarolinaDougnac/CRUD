<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $cod_barra
 * @property $marca_id
 * @property $tienda_id
 * @property $bodega_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Bodega $bodega
 * @property FacturaProducto[] $facturaProductos
 * @property Inventario[] $inventarios
 * @property Marca $marca
 * @property Tienda $tienda
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'cod_barra' => 'required',
		'marca_id' => 'required',
		'tienda_id' => 'required',
		'bodega_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cod_barra','marca_id','tienda_id','bodega_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bodega()
    {
        return $this->hasOne('App\Models\Bodega', 'id', 'bodega_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturaProductos()
    {
        return $this->hasMany('App\Models\FacturaProducto', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tienda()
    {
        return $this->hasOne('App\Models\Tienda', 'id', 'tienda_id');
    }
   /** Relacion Muchos a Muchos */
   public function facturas(){
    return $this->belongsToMany('App\Models\Factura');
} 

}
