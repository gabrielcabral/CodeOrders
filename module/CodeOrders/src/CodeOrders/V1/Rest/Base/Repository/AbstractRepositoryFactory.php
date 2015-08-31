<?php

namespace CodeOrders\V1\Rest\Base\Repository;


use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;

class AbstractRepositoryFactory implements FactoryInterface
{

    protected $entity;

    protected $table;

    protected $dbAdapter;

    protected $repository;

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get($this->dbAdapter);

        $hydrator = new HydratingResultSet(new ClassMethods(), new $this->entity);

        $tableGateway = new TableGateway($this->table, $dbAdapter, null, $hydrator);

        $repository = new $this->repository($tableGateway);

        return $repository;
    }
}