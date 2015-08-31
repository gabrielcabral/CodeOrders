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
        $resultSet = $this->tableGateway->select(['id' => (int)$id]);

        return $resultSet->current();
    }
}
