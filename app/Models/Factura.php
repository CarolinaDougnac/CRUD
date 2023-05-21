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
 *
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
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['proveedore_id','fecha_emision','fecha_reception'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'proveedore_id');
    }
    

}
