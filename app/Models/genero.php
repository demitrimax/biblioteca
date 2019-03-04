<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class genero
 * @package App\Models
 * @version March 3, 2019, 8:20 pm CST
 *
 * @property \Illuminate\Database\Eloquent\Collection Libro
 * @property string nombre
 */
class genero extends Model
{
    use SoftDeletes;

    public $table = 'generos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function libros()
    {
        return $this->hasMany(\App\Models\Libro::class);
    }
}
