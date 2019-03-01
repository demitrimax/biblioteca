<?php

namespace App\Repositories;

use App\Models\editoriales;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class editorialesRepository
 * @package App\Repositories
 * @version March 1, 2019, 12:28 am CST
 *
 * @method editoriales findWithoutFail($id, $columns = ['*'])
 * @method editoriales find($id, $columns = ['*'])
 * @method editoriales first($columns = ['*'])
*/
class editorialesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'facebook',
        'twitter',
        'website'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return editoriales::class;
    }
}
