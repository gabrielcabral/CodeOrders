<?php

namespace CodeOrders\V1\Rest\Users\Repository;

use CodeOrders\V1\Rest\Base\Repository\AbstractRepository;
use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class UsersRepository
 * @package CodeOrders\V1\Rest\Users\Repository
 */
class UsersRepository extends AbstractRepository
{
    protected $tableGateway;

    /**
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
        parent::__construct($this->tableGateway);

        $this->collection = 'CodeOrders\\V1\\Rest\\Users\\UsersCollection';
    }
}
