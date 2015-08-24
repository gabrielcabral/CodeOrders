<?php

namespace CodeOrders\V1\Rest\Users\Repository;

use CodeOrders\V1\Rest\Users\UsersCollection;
use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

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
        $tableGateway = $this->tableGateway;

        $paginatorAdapter = new DbTableGateway($tableGateway);

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
}
