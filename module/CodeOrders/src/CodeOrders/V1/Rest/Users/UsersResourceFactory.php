<?php
namespace CodeOrders\V1\Rest\Users;

/**
 * Class UsersResourceFactory
 * @package CodeOrders\V1\Rest\Users
 */
class UsersResourceFactory
{
    /**
     * Magic method __invoke
     *
     * @param $services
     * @return UsersResource
     */
    public function __invoke($services)
    {
        return new UsersResource($services->get('CodeOrders\\V1\\Rest\\Users\\Repository\\UsersRepository'));
    }
}
