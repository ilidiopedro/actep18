<?php

namespace App\Repositories;

use App\Models\Evolucao;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EvolucaoRepository
 * @package App\Repositories
 * @version October 19, 2017, 7:32 pm UTC
 *
 * @method Evolucao findWithoutFail($id, $columns = ['*'])
 * @method Evolucao find($id, $columns = ['*'])
 * @method Evolucao first($columns = ['*'])
*/
class EvolucaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tamano_in',
        'tamanho_fin',
        'data_avaliacao',
        'descricao'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Evolucao::class;
    }
}
