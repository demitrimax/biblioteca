<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class carrito extends Model
{
    //
    use SoftDeletes;

    public $table = 'carrito';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'ejemplar_id',
        'cliente_id',
        'fecha',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'ejemplar_id' => 'integer',
        'cliente_id'=> 'integer',
        'fecha' => 'date',
    ];
}
