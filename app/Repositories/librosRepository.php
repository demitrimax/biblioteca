<?php

namespace App\Repositories;

use App\Models\libros;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class librosRepository
 * @package App\Repositories
 * @version March 1, 2019, 12:14 am CST
 *
 * @method libros findWithoutFail($id, $columns = ['*'])
 * @method libros find($id, $columns = ['*'])
 * @method libros first($columns = ['*'])
*/
class librosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'editorial_id',
        'autor_id',
        'genero_id',
        'anioedit',
        'portadaimg'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return libros::class;
    }
}
