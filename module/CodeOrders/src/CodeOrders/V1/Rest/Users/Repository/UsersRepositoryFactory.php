<?php

namespace CodeOrders\V1\Rest\Users\Repository;

use CodeOrders\V1\Rest\Base\Repository\AbstractRepositoryFactory;

/**
 * Class UsersRepositoryFactory
 * @package CodeOrders\V1\Rest\Users\Repository
 */
class UsersRepositoryFactory extends AbstractRepositoryFactory
{
    /**
     * Construct
     */
    public function __construct()
    {
        $this->entity = 'CodeOrders\\V1\\Rest\\Users\\UsersEntity';
        $this->table = 'oauth_users';
        $this->dbAdapter = 'DbAdapter';
        $this->repository = 'CodeOrders\\V1\\Rest\\Users\\Repository\\UsersRepository';
    }
}
