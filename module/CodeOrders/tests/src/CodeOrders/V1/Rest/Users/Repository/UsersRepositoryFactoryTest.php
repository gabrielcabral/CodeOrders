<?php

namespace CodeOrders\V1\Rest\Users\Repository;

use Zend\ServiceManager\FactoryInterface;

/**
 * Class UsersRepositoryFactoryTest
 * @package CodeOrders\V1\Rest\Users\Repository
 */
class UsersRepositoryFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UsersRepositoryFactory
     */
    private $class;

    /**
     * Set Up
     */
    public function setUp()
    {

        $this->class = new UsersRepositoryFactory();
    }

    /**
     * Check if the class exist
     */
    public function testCheckIfTheClassExist()
    {
        $class = 'CodeOrders\V1\Rest\Users\Repository\UsersRepositoryFactory';
        $this->assertTrue(class_exists($class), "The Class {$class} not Found");
    }

    /**
     * Test checks implementation interface
     */
    public function testCheckImplementationInterface()
    {
        $interface = $this->getMock('Zend\ServiceManager\FactoryInterface');
        $this->assertTrue($interface instanceof FactoryInterface);
    }

    /**
     * Test check type interface
     */
    public function testCheckTypeInterface()
    {
        $this->assertInstanceOf(
            'Zend\ServiceManager\FactoryInterface', $this->class
        );
    }
}
