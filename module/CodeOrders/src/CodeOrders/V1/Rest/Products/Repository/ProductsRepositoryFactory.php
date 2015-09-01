<?php

namespace CodeOrders\V1\Rest\Products\Repository;

use CodeOrders\V1\Rest\Base\Repository\AbstractRepositoryFactory;

/**
 * Class ProductsRepositoryFactory
 * @package CodeOrders\V1\Rest\Products\Repository
 */
class ProductsRepositoryFactory extends AbstractRepositoryFactory
{
    /**
     * Construct
     */
    public function __construct()
    {
        $this->entity = 'CodeOrders\\V1\\Rest\Products\\ProductsEntity';
        $this->table = 'oauth_users';
        $this->dbAdapter = 'DbAdapter';
        $this->repository = 'CodeOrders\\V1\\Rest\\Products\\Repository\\ProductsRepository';
    }
}
