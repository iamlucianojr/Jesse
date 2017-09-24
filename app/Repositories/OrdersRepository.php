<?php

namespace App\Repositories;

use App\Models\Orders;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrdersRepository
 * @package App\Repositories
 * @version September 23, 2017, 9:58 pm UTC
 *
 * @method Orders findWithoutFail($id, $columns = ['*'])
 * @method Orders find($id, $columns = ['*'])
 * @method Orders first($columns = ['*'])
*/
class OrdersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'foobar'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Orders::class;
    }
}
