<?php
return array(
    'router' => array(
        'routes' => array(
            'code-orders.rest.ptypes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ptypes[/:ptypes_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Ptypes\\Controller',
                    ),
                ),
            ),
            'code-orders.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:users_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
            'code-orders.rest.clients' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/clients[/:clients_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Clients\\Controller',
                    ),
                ),
            ),
            'code-orders.rest.products' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/products[/:products_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Products\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'code-orders.rest.ptypes',
            1 => 'code-orders.rest.users',
            2 => 'code-orders.rest.clients',
            3 => 'code-orders.rest.products',
        ),
    ),
    'zf-rest' => array(
        'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Ptypes\\PtypesResource',
            'route_name' => 'code-orders.rest.ptypes',
            'route_identifier_name' => 'ptypes_id',
            'collection_name' => 'ptypes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '10',
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Ptypes\\PtypesEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Ptypes\\PtypesCollection',
            'service_name' => 'ptypes',
        ),
        'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'code-orders.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'PATCH',
                1 => 'DELETE',
                2 => 'PUT',
                3 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '10',
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
        'CodeOrders\\V1\\Rest\\Clients\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Clients\\ClientsResource',
            'route_name' => 'code-orders.rest.clients',
            'route_identifier_name' => 'clients_id',
            'collection_name' => 'clients',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '10',
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Clients\\ClientsEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Clients\\ClientsCollection',
            'service_name' => 'clients',
        ),
        'CodeOrders\\V1\\Rest\\Products\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Products\\ProductsResource',
            'route_name' => 'code-orders.rest.products',
            'route_identifier_name' => 'products_id',
            'collection_name' => 'products',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '10',
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Products\\ProductsEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Products\\ProductsCollection',
            'service_name' => 'products',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => 'HalJson',
            'CodeOrders\\V1\\Rest\\Users\\Controller' => 'HalJson',
            'CodeOrders\\V1\\Rest\\Clients\\Controller' => 'HalJson',
            'CodeOrders\\V1\\Rest\\Products\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Clients\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Products\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Clients\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Products\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'CodeOrders\\V1\\Rest\\Ptypes\\PtypesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.ptypes',
                'route_identifier_name' => 'ptypes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'CodeOrders\\V1\\Rest\\Ptypes\\PtypesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.ptypes',
                'route_identifier_name' => 'ptypes_id',
                'is_collection' => true,
            ),
            'CodeOrders\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CodeOrders\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ),
            'CodeOrders\\V1\\Rest\\Clients\\ClientsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.clients',
                'route_identifier_name' => 'clients_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'CodeOrders\\V1\\Rest\\Clients\\ClientsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.clients',
                'route_identifier_name' => 'clients_id',
                'is_collection' => true,
            ),
            'CodeOrders\\V1\\Rest\\Products\\ProductsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.products',
                'route_identifier_name' => 'products_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CodeOrders\\V1\\Rest\\Products\\ProductsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.products',
                'route_identifier_name' => 'products_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'CodeOrders\\V1\\Rest\\Ptypes\\PtypesResource' => array(
                'adapter_name' => 'DbAdapter',
                'table_name' => 'ptypes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'CodeOrders\\V1\\Rest\\Ptypes\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'CodeOrders\\V1\\Rest\\Ptypes\\PtypesResource\\Table',
            ),
            'CodeOrders\\V1\\Rest\\Clients\\ClientsResource' => array(
                'adapter_name' => 'DbAdapter',
                'table_name' => 'clients',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'CodeOrders\\V1\\Rest\\Clients\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'CodeOrders\\V1\\Rest\\Clients\\ClientsResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
            'input_filter' => 'CodeOrders\\V1\\Rest\\Ptypes\\Validator',
        ),
        'CodeOrders\\V1\\Rest\\Clients\\Controller' => array(
            'input_filter' => 'CodeOrders\\V1\\Rest\\Clients\\Validator',
        ),
        'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
            'input_filter' => 'CodeOrders\\V1\\Rest\\Users\\Validator',
        ),
        'CodeOrders\\V1\\Rest\\Products\\Controller' => array(
            'input_filter' => 'CodeOrders\\V1\\Rest\\Products\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'CodeOrders\\V1\\Rest\\Ptypes\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '45',
                            'min' => '3',
                        ),
                    ),
                ),
                'description' => 'Nome do tipo de pagamento 
Name of playment type',
                'error_message' => 'The name field is invalid',
            ),
        ),
        'CodeOrders\\V1\\Rest\\Clients\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
                'description' => 'Name of clients',
                'error_message' => 'The name field is invalid',
            ),
            1 => array(
                'name' => 'document',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
                'description' => 'Document of clients',
                'error_message' => 'The document field is invalid',
            ),
            2 => array(
                'name' => 'address',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '200',
                        ),
                    ),
                ),
                'description' => 'Address of clients',
                'error_message' => 'The Address field is invalid',
            ),
            3 => array(
                'name' => 'zipcode',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Zipcode of clients',
                'error_message' => 'The zipcode field is invalid',
            ),
            4 => array(
                'name' => 'city',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
                'description' => 'City of clients',
                'error_message' => 'The city field is invalid',
            ),
            5 => array(
                'name' => 'state',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'State of clients',
                'error_message' => 'The state field is invalid',
            ),
            6 => array(
                'name' => 'responsible',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
                'description' => 'Responsible of clients',
                'error_message' => 'The responsible field is invalid',
            ),
            7 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '100',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(
                            'message' => 'Email invalid',
                        ),
                    ),
                ),
                'description' => 'Email of clients',
                'error_message' => 'the email field is invalid',
            ),
            8 => array(
                'name' => 'phone',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '15',
                        ),
                    ),
                ),
                'description' => 'Phone of clients',
                'error_message' => 'The phone field is invalid',
            ),
            9 => array(
                'name' => 'obs',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
                'description' => 'Obs of clients',
                'error_message' => 'The obs... field is invalid',
            ),
        ),
        'CodeOrders\\V1\\Rest\\Users\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '60',
                            'min' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                        'options' => array(),
                    ),
                ),
                'name' => 'username',
                'description' => 'Username of users',
                'error_message' => 'The field is invalid',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '60',
                            'min' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'first_name',
                'description' => 'Fisrt name of users',
                'error_message' => 'The first name field is invalid',
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '60',
                            'min' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'last_name',
                'description' => 'Last name of users',
                'error_message' => 'The last name field is invalid',
            ),
        ),
        'CodeOrders\\V1\\Rest\\Products\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '60',
                            'min' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'name',
                'description' => 'Name of products',
                'error_message' => 'The name field is invalid',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '60',
                            'min' => '3',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'description',
                'description' => 'Description of products',
                'error_message' => 'The description field is invalid',
            ),
            2 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'price',
                'description' => 'Price of product',
                'error_message' => 'The price field is invalid',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'CodeOrders\\V1\\Rest\\Users\\UsersResource' => 'CodeOrders\\V1\\Rest\\Users\\UsersResourceFactory',
            'CodeOrders\\V1\\Rest\\Users\\Repository\\UsersRepository' => 'CodeOrders\\V1\\Rest\\Users\\Repository\\UsersRepositoryFactory',
            'CodeOrders\\V1\\Rest\\Products\\ProductsResource' => 'CodeOrders\\V1\\Rest\\Products\\ProductsResourceFactory',
            'CodeOrders\\V1\\Rest\\Products\\Repository\\ProductsRepository' => 'CodeOrders\\V1\\Rest\\Products\\Repository\\ProductsRepositoryFactory',
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
);
