<?php

namespace App\Repositories;

use App\Models\ejemplares;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ejemplaresRepository
 * @package App\Repositories
 * @version March 8, 2019, 12:21 am CST
 *
 * @method ejemplares findWithoutFail($id, $columns = ['*'])
 * @method ejemplares find($id, $columns = ['*'])
 * @method ejemplares first($columns = ['*'])
*/
class ejemplaresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libro_id',
        'numeje'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ejemplares::class;
    }
}
