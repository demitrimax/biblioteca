<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ejemplares
 * @package App\Models
 * @version March 8, 2019, 12:21 am CST
 *
 * @property \App\Models\Libro libro
 * @property \Illuminate\Database\Eloquent\Collection roleHasPermissions
 * @property integer libro_id
 * @property string numeje
 */
class ejemplares extends Model
{
    use SoftDeletes;

    public $table = 'ejemplares';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'libro_id',
        'numeje'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'libro_id' => 'integer',
        'numeje' => 'string'
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
    public function libro()
    {
        return $this->belongsTo(\App\Models\Libro::class);
    }
}
