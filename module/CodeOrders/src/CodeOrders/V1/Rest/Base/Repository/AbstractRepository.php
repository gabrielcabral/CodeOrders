<?php

namespace CodeOrders\V1\Rest\Base\Repository;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

class AbstractRepository
{
    /**
     * @var TableGatewayInterface
     */
    protected $tableGateway;

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


    public function findAll()
    {
        return $this->tableGateway->select();
    }
}