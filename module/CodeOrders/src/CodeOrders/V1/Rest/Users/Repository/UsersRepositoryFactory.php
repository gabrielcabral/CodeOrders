<?php

namespace CodeOrders\V1\Rest\Users\Repository;

use CodeOrders\V1\Rest\Users\UsersEntity;
use CodeOrders\V1\Rest\Users\Mapper\UsersMapper;

use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;

/**
 * Class UsersRepositoryFactory
 * @package CodeOrders\V1\Rest\Users\Repository
 */
class UsersRepositoryFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get('DbAdapter');
        // $usersMapper = new UsersMapper();
        $hydrator = new HydratingResultSet(new ClassMethods(), new UsersEntity());

        $tableGateway = new TableGateway('oauth_users', $dbAdapter, null, $hydrator);

        $usersRepository = new UsersRepository($tableGateway);

        Return $usersRepository;
    }
}