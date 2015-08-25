<?php

namespace CodeOrders\V1\Rest\Users;

use CodeOrders\V1\Rest\Users\Mapper\UsersMapper;

/**
 * Class UsersMapperTest
 * @package CodeOrders\V1\Rest\Users
 */
class UsersMapperTest extends \PHPUnit_Framework_TestCase
{

    /**
    * @var UsersMapper
    */
    private $class;

    /**
     * Set Up
     */
    public function setUp() {
        $this->class = new UsersMapper();
    }

    /**
     * Check if the class exist
     */
    public function testCheckIfTheClassExist()
    {
        $class = 'CodeOrders\V1\Rest\Users\Mapper\UsersMapper';
        $this->assertTrue(class_exists($class), "The Class {$class} not Found");
    }
}
