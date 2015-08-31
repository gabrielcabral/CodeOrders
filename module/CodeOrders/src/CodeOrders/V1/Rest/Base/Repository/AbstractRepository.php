<?php

namespace CodeOrders\V1\Rest\Base\Repository;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

use ZF\ApiProblem\ApiProblem;

/**
 * Class AbstractRepository
 * @package CodeOrders\V1\Rest\Base\Repository
 */
class AbstractRepository
{
    /**
     * @var TableGatewayInterface
     */
    protected $tableGateway;

    /**
     * @var Object
     */
    protected $collection;

    /**
     * Construct
     *
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    /**
     * Find all
     *
     * @return mixed
     */
    public function findAll()
    {
        $paginatorAdapter = new DbTableGateway($this->tableGateway);

        return new $this->collection($paginatorAdapter);
    }

    /**
     * Find
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->tableGateway->select(['id' => (int)$id]);

        if (!$result)
            return new ApiProblem(404, 'Registro não encontrado | Registry not found');

        return $result->current();
    }

    /**
     * Insert data user
     *
     * @param $data
     * @return array|ApiProblem
     */
    public function insert($data)
    {
        $data  = (array) $data;

        $result = $this->tableGateway->insert($data);

        if(!$result)
            return new ApiProblem(500, 'Erro ao inserir registro | Error insert registry');

        $data['id'] = $this->tableGateway->getLastInsertValue();

        return $data;
    }

    /**
     * Update
     *
     * @param $id
     * @param $data
     * @return array|ApiProblem
     */
    public function update($id, $data)
    {
        $result = $this->find($id);

        $data  = (array) $data;

        if (!$result)
            return new ApiProblem(404, 'Registro não encontrado | Registry not found');

        $result = $this->tableGateway->update($data, ['id' => $id]);

        if(!$result)
            return new ApiProblem(500, 'Erro ao alterar registro | Error update registry');

        $data['id'] = $this->tableGateway->getLastInsertValue();

        return $data;
    }

    /**
     * Delete user
     *
     * @param $id
     * @return bool|ApiProblem
     */
    public function delete($id)
    {
        $result = $this->find($id);

        if (!$result)
            return new ApiProblem(404, 'Registro não encontrado | Registry not found');

        $delete = $this->tableGateway->delete(['id' => $id]);

        if(!$delete)
            return new ApiProblem(500, 'Erro ao deletar registro | Error delete registry');

        return true;
    }
}
