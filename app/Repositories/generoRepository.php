<?php

namespace App\Repositories;

use App\Models\genero;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class generoRepository
 * @package App\Repositories
 * @version March 3, 2019, 8:20 pm CST
 *
 * @method genero findWithoutFail($id, $columns = ['*'])
 * @method genero find($id, $columns = ['*'])
 * @method genero first($columns = ['*'])
*/
class generoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return genero::class;
    }
}
