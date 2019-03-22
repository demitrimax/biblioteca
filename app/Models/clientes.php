<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class clientes
 * @package App\Models
 * @version March 3, 2019, 11:23 am CST
 *
 * @property string nombre
 * @property string direccion
 * @property integer estado_id
 * @property integer municipio_id
 * @property string observaciones
 */
class clientes extends Model
{
    use SoftDeletes;

    public $table = 'clientes';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'direccion',
        'estado_id',
        'municipio_id',
        'observaciones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'estado_id' => 'integer',
        'municipio_id' => 'integer',
        'observaciones' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function estado()
    {
      return $this->belongsTo('App\estados','estado_id');
    }

    public function municipio()
    {
      return $this->belongsTo('App\municipios','municipio_id');
    }

    public function carritos()
    {
      return $this->hasMany('App\Models\carrito', 'cliente_id');
    }


}
