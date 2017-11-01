<?php

namespace App\Repositories;

use App\Models\Produto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProdutoRepository
 * @package App\Repositories
 * @version October 19, 2017, 7:31 pm UTC
 *
 * @method Produto findWithoutFail($id, $columns = ['*'])
 * @method Produto find($id, $columns = ['*'])
 * @method Produto first($columns = ['*'])
*/
class ProdutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'descricao',
        'foto',
        'categorias_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Produto::class;
    }
}
