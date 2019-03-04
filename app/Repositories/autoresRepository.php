<?php

namespace App\Repositories;

use App\Models\autores;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class autoresRepository
 * @package App\Repositories
 * @version March 3, 2019, 8:34 pm CST
 *
 * @method autores findWithoutFail($id, $columns = ['*'])
 * @method autores find($id, $columns = ['*'])
 * @method autores first($columns = ['*'])
*/
class autoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'nacionalidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return autores::class;
    }
}
