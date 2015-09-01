<?php

namespace CodeOrders\V1\Rest\Products\Repository;

use CodeOrders\V1\Rest\Base\Repository\AbstractRepository;
use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class ProductsRepositoty
 * @package CodeOrders\V1\Rest\Products\Repository
 */
class ProductsRepository extends AbstractRepository
{
    /**
     * @var TableGatewayInterface
     */
    protected $tableGateway;

    /**
     * Construct
     *
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
        parent::__construct($this->tableGateway);

        $this->collection = 'CodeOrders\\V1\\Rest\\Products\\ProductsCollection';
    }
}
