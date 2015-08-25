<?php

namespace CodeOrders\V1\Rest\Users;

/**
 * Class UsersResourceFactoryTest
 * @package CodeOrders\V1\Rest\Users
 */
class UsersResourceFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check if the class exist
     */
    public function testCheckIfTheClassExist()
    {
        $class = 'CodeOrders\V1\Rest\Users\UsersResourceFactory';
        $this->assertTrue(class_exists($class), "The Class {$class} not Found");
    }
}