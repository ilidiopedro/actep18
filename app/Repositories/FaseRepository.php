<?php

namespace App\Repositories;

use App\Models\Fase;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FaseRepository
 * @package App\Repositories
 * @version October 19, 2017, 7:38 pm UTC
 *
 * @method Fase findWithoutFail($id, $columns = ['*'])
 * @method Fase find($id, $columns = ['*'])
 * @method Fase first($columns = ['*'])
*/
class FaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'descricao',
        'percentagem',
        'data_inicio',
        'data_fim',
        'itens_id',
        'projectos_id',
        'evolucoes_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fase::class;
    }
}
