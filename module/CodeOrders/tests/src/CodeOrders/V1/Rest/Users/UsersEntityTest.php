<?php

namespace CodeOrders\V1\Rest\Users;

/**
 * Class UsersEntityTest
 * @package CodeOrders\V1\Rest\Users
 */
class UsersEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UsersEntity
     */
    private $class;

    /**
     * Set Up
     */
    public function setUp() {
        $this->class = new UsersEntity();
    }

    /**
     * Check if the class exist
     */
    public function testCheckIfTheClassExist()
    {
        $class = 'CodeOrders\V1\Rest\Users\UsersEntity';
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

    /**
     * Check the attributes
     *
     * @dataProvider testDataProviderAttributes
     * @param $attributes
     */
    public function testCheckTheAttributes($attributes)
    {
        $this->assertClassHasAttribute($attributes, 'CodeOrders\V1\Rest\Users\UsersEntity');
    }

    /**
     * Check gets and sets
     *
     * @dataProvider testDataProviderAttributes
     * @param $attributes
     * @param $values
     */
    public function testCheckGetsAndSetsOfAttributes($attributes, $values)
    {
        $get = 'get' . ucfirst($attributes);
        $set = 'set' . ucfirst($attributes);

        $this->class->$set($values);

        $this->assertEquals($values, $this->class->$get());
    }
}