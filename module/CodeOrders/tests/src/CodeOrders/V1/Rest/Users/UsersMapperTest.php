<?php

namespace CodeOrders\V1\Rest\Users;


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
        $class = 'CodeOrders\V1\Rest\Users\UsersMapper';
        $this->assertTrue(class_exists($class), "The Class {$class} not Found");
    }

    /**
     * Data provide attributes
     *
     * @return array
     */
    public function testDataProviderAttributes()
    {
        return [
            ['id', 1],
            ['username', 'test'],
            ['password', 'test'],
            ['firstName', 'test'],
            ['lastName', 'test'],
            ['role', 'test']
        ];
    }
}