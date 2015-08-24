<?php

namespace CodeOrders\V1\Rest\Users\Repository;

class UsersRepositoryFactoryTest
{
    /**
     * Check if the class exist
     */
    public function testCheckIfTheClassExist()
    {
        $class = 'CodeOrders\V1\Rest\Users\Repository\UsersRepositoryFactory';
        $this->assertTrue(class_exists($class), "The Class {$class} not Found");
    }
}