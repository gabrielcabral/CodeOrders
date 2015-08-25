<?php

namespace CodeOrders\V1\Rest\Users;

/**
 * Class UsersResourceTest
 * @package CodeOrders\V1\Rest\Users
 */
class UsersResourceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UsersEntity
     */
    private $class;

    /**
     * Set Up
     */
    public function setUp() {
        $userRepository = $this->getMockBuilder('CodeOrders\V1\Rest\Users\Repository\UsersRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $this->class = new UsersResource($userRepository);
    }

    /**
     * Check if the class exist
     */
    public function testCheckIfTheClassExist()
    {
        $class = 'CodeOrders\V1\Rest\Users\UsersResource';
        $this->assertTrue(class_exists($class), "The Class {$class} not Found");
    }

    /**
     * Data provide attributes
     *
     * @return array
     */
    public function testDataProviderAttributes()
    {
        $userRepository = $this->getMockBuilder('CodeOrders\V1\Rest\Users\Repository\UsersRepository')
            ->disableOriginalConstructor()
            ->getMock();

        return [
            ['usersRepository', $userRepository],
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
        $this->assertClassHasAttribute($attributes, 'CodeOrders\V1\Rest\Users\UsersResource');
    }

    /**
     * Test Check if methods Exist
     */
    public function testCheckIfMethodsExist()
    {
        $this->class->create('data');
        $this->assertTrue(method_exists($this->class, "create"), "Method not Found");

        $this->class->delete('1');
        $this->assertTrue(method_exists($this->class, "delete"), "Method not Found");

        $this->class->deleteList('data');
        $this->assertTrue(method_exists($this->class, "deleteList"), "Method not Found");

        $this->class->fetch('1');
        $this->assertTrue(method_exists($this->class, "fetch"), "Method not Found");

        $this->class->fetchAll($params = array());
        $this->assertTrue(method_exists($this->class, "fetchAll"), "Method not Found");

        $this->class->patch('1', 'data');
        $this->assertTrue(method_exists($this->class, "patch"), "Method not Found");

        $this->class->replaceList('data');
        $this->assertTrue(method_exists($this->class, "replaceList"), "Method not Found");

        $this->class->update('1', 'data');
        $this->assertTrue(method_exists($this->class, "update"), "Method not Found");
    }
}
