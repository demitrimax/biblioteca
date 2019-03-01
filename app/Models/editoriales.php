<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class editoriales
 * @package App\Models
 * @version March 1, 2019, 12:28 am CST
 *
 * @property \Illuminate\Database\Eloquent\Collection Libro
 * @property string nombre
 * @property string facebook
 * @property string twitter
 * @property string website
 */
class editoriales extends Model
{
    use SoftDeletes;

    public $table = 'editoriales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'facebook',
        'twitter',
        'website'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'website' => 'string'
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
