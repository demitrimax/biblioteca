<?php

namespace App\Repositories;

use App\Models\clientes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class clientesRepository
 * @package App\Repositories
 * @version March 3, 2019, 11:23 am CST
 *
 * @method clientes findWithoutFail($id, $columns = ['*'])
 * @method clientes find($id, $columns = ['*'])
 * @method clientes first($columns = ['*'])
*/
class clientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'estado_id',
        'municipio_id',
        'observaciones'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clientes::class;
    }
}
