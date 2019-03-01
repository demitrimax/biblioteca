<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class libros
 * @package App\Models
 * @version March 1, 2019, 12:14 am CST
 *
 * @property \App\Models\Editoriale editoriale
 * @property \App\Models\Autore autore
 * @property \App\Models\Genero genero
 * @property string nombre
 * @property integer editorial_id
 * @property integer autor_id
 * @property integer genero_id
 * @property string|\Carbon\Carbon anioedit
 * @property string portadaimg
 */
class libros extends Model
{
    use SoftDeletes;

    public $table = 'libros';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'editorial_id',
        'autor_id',
        'genero_id',
        'anioedit',
        'portadaimg'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'integer',
        'nombre' => 'string',
        'editorial_id' => 'integer',
        'autor_id' => 'integer',
        'genero_id' => 'integer',
        'portadaimg' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function editoriale()
    {
        return $this->belongsTo(\App\Models\Editoriale::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function autore()
    {
        return $this->belongsTo(\App\Models\Autore::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function genero()
    {
        return $this->belongsTo(\App\Models\Genero::class);
    }
}
