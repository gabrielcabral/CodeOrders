<?php

namespace CodeOrders\V1\Rest\Users\Repository;


class UsersRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UsersRepository
     */
    private $class;

    /**
     * Set Up
     */
    public function setUp()
    {
        $tableGateway = $this->getMock('Zend\Db\TableGateway\TableGatewayInterface');

        $this->class = new UsersRepository($tableGateway);
    }

    /**
     * Check if the class exist
     */
    public function testCheckIfTheClassExist()
    {
        $class = 'CodeOrders\V1\Rest\Users\Repository\UsersRepository';
        $this->assertTrue(class_exists($class), "The Class {$class} not Found");
    }
}
