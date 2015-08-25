<?php

namespace CodeOrders\V1\Rest\Users;

/**
 * Class UsersCollectionTest
 * @package CodeOrders\V1\Rest\Users
 */
class UsersCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Check if the class exist
     */
    public function testCheckIfTheClassExist()
    {
        $class = 'CodeOrders\V1\Rest\Users\UsersCollection';
        $this->assertTrue(class_exists($class), "The Class {$class} not Found");
    }
}