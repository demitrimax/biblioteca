<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class autores
 * @package App\Models
 * @version March 3, 2019, 8:34 pm CST
 *
 * @property \Illuminate\Database\Eloquent\Collection Libro
 * @property string nombre
 * @property string nacionalidad
 * @property string bio
 * @property string foto
 */
class autores extends Model
{
    use SoftDeletes;

    public $table = 'autores';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'nacionalidad',
        'bio',
        'foto',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'           => 'integer',
        'nombre'       => 'string',
        'nacionalidad' => 'string',
        'bio'          => 'string',
        'foto'         => 'string',
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
        return $this->hasMany(\App\Models\libros::class);
    }
}
