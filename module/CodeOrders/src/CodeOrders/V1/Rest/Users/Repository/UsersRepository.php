<?php

namespace CodeOrders\V1\Rest\Users\Repository;

use CodeOrders\V1\Rest\Users\UsersCollection;

use CodeOrders\V1\Rest\Users\UsersEntity;
use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;
use ZF\ApiProblem\ApiProblem;

/**
 * Class UsersRepository
 * @package CodeOrders\V1\Rest\Users\Repository
 */
class UsersRepository
{
    /**
     * @var TableGatewayInterface
     */
    private $tableGateway;

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
     * Find all users
     *
     * @return UsersCollection
     */
    public function findAll()
    {
        $paginatorAdapter = new DbTableGateway($this->tableGateway);

        return new UsersCollection($paginatorAdapter);
    }

    /**
     * Find user
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $resultSet = $this->tableGateway->select(['id' => (int)$id]);

        return $resultSet->current();
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

        $insert = $this->tableGateway->insert($data);

        if(!$insert)
            return new ApiProblem(500, 'Erro ao inserir registro | Error insert registry');

        $data['id'] = $this->tableGateway->getLastInsertValue();

        return $data;


    }

    // erro
    public function save($data)
    {
        $id = $data['id'];

        if($id == 0) {
            $result = $this->tableGateway->insert($data);

            if (!$result)
                return new ApiProblem(500, 'Erro ao inserir registro | Error insert registry');

            $insert = $this->tableGateway->lastInsertValue;
//        $insert = $this->tableGateway->getLastInsetValue();

            return $insert;
        }

        if ($this->find($id)) {
            $result = $this->tableGateway->update($data, ['id' => $id]);

            if(!$result)
                return new ApiProblem(500, 'Erro ao atualizar registro | Error update registry');

            $update = $this->tableGateway->lastInsertValue;

            return $update;
        }

        return new ApiProblem(404, 'Registro não encontrado | Registry not found');


    }

    // errado
    public function update($id, $data)
    {
        $result = $this->find($id);
        if (!$result)
            return new ApiProblem(404, 'Registro não encontrado | Registry not found');

        $update = $this->tableGateway->update($data, ['id' => $id]);

        if(!$update)
            return new ApiProblem(500, 'Erro ao atualizar registro | Error update registry');

        return $data;
    }

    // correto
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