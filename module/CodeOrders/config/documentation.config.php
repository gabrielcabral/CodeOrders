<?php
return array(
    'CodeOrders\\V1\\Rest\\Products\\Controller' => array(
        'description' => 'Cadastro de produtos | Products register',
        'collection' => array(
            'description' => 'Produtos cadastrados no sistema | Products registered systems',
            'GET' => array(
                'description' => 'Lista dos os produtos | List all products',
                'response' => '{
   "_links": {
       "self": {
           "href": "/products"
       },
       "first": {
           "href": "/products?page={page}"
       },
       "prev": {
           "href": "/products?page={page}"
       },
       "next": {
           "href": "/products?page={page}"
       },
       "last": {
           "href": "/products?page={page}"
       }
   }
   "_embedded": {
       "products": [
           {
               "_links": {
                   "self": {
                       "href": "/products[/:products_id]"
                   }
               }
              "name": "Name of products",
              "description": "Description of products",
              "price": "Price of products"
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Criar um novo produto | Create a new product',
                'request' => '{
   "name": "Name of products",
   "description": "Description of products",
   "price": "Price of products"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/products[/:products_id]"
       }
   }
   "name": "Name of products",
   "description": "Description of products",
   "price": "Price of products"
}',
            ),
        ),
        'entity' => array(
            'description' => 'Entidade Produtos | Products entity',
            'GET' => array(
                'description' => 'Retorna um produto | Return a product',
                'response' => '{
   "_links": {
       "self": {
           "href": "/products[/:products_id]"
       }
   }
   "name": "Name of products",
   "description": "Description of products",
   "price": "Price of products"
}',
            ),
            'PATCH' => array(
                'description' => 'Atualiza parcialmente um produto | Update partially a product',
                'request' => '{
   "name": "Name of products",
   "description": "Description of products",
   "price": "Price of products"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/products[/:products_id]"
       }
   }
   "name": "Name of products",
   "description": "Description of products",
   "price": "Price of products"
}',
            ),
            'PUT' => array(
                'description' => 'Atualiza um produto | Update a product',
                'request' => '{
   "name": "Name of products",
   "description": "Description of products",
   "price": "Price of products"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/products[/:products_id]"
       }
   }
   "name": "Name of products",
   "description": "Description of products",
   "price": "Price of products"
}',
            ),
            'DELETE' => array(
                'description' => 'Deleta o produto | Delete a product',
                'request' => '{
   "name": "Name of products",
   "description": "Description of products",
   "price": "Price of products"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/products[/:products_id]"
       }
   }
   "name": "Name of products",
   "description": "Description of products",
   "price": "Price of products"
}',
            ),
        ),
    ),
    'CodeOrders\\V1\\Rest\\Clients\\Controller' => array(
        'description' => 'Cadastro de clientes | Customers register',
        'collection' => array(
            'description' => 'Clientes cadastrados no sistema | Customers registered systems',
            'GET' => array(
                'description' => 'Lista todos os usuários | List all customers',
                'response' => '{
   "_links": {
       "self": {
           "href": "/clients"
       },
       "first": {
           "href": "/clients?page={page}"
       },
       "prev": {
           "href": "/clients?page={page}"
       },
       "next": {
           "href": "/clients?page={page}"
       },
       "last": {
           "href": "/clients?page={page}"
       }
   }
   "_embedded": {
       "clients": [
           {
               "_links": {
                   "self": {
                       "href": "/clients[/:clients_id]"
                   }
               }
              "name": "Name of clients",
              "document": "Document of clients",
              "address": "Address of clients",
              "zipcode": "Zipcode of clients",
              "city": "City of clients",
              "state": "State of clients",
              "responsible": "Responsible of clients",
              "email": "Email of clients",
              "phone": "Phone of clients",
              "obs": "Obs of clients"
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Criar um novo cliente | Create a new client',
                'request' => '{
   "name": "Name of clients",
   "document": "Document of clients",
   "address": "Address of clients",
   "zipcode": "Zipcode of clients",
   "city": "City of clients",
   "state": "State of clients",
   "responsible": "Responsible of clients",
   "email": "Email of clients",
   "phone": "Phone of clients",
   "obs": "Obs of clients"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/clients[/:clients_id]"
       }
   }
   "name": "Name of clients",
   "document": "Document of clients",
   "address": "Address of clients",
   "zipcode": "Zipcode of clients",
   "city": "City of clients",
   "state": "State of clients",
   "responsible": "Responsible of clients",
   "email": "Email of clients",
   "phone": "Phone of clients",
   "obs": "Obs of clients"
}',
            ),
        ),
        'entity' => array(
            'description' => 'Entidade Clientes | Clients entity',
            'GET' => array(
                'description' => 'Retorna um cliente | Return a client',
                'response' => '{
   "_links": {
       "self": {
           "href": "/clients[/:clients_id]"
       }
   }
   "name": "Name of clients",
   "document": "Document of clients",
   "address": "Address of clients",
   "zipcode": "Zipcode of clients",
   "city": "City of clients",
   "state": "State of clients",
   "responsible": "Responsible of clients",
   "email": "Email of clients",
   "phone": "Phone of clients",
   "obs": "Obs of clients"
}',
            ),
            'PATCH' => array(
                'description' => 'Atualiza parcialmente um cliente | Update partially a client',
                'request' => '{
   "name": "Name of clients",
   "document": "Document of clients",
   "address": "Address of clients",
   "zipcode": "Zipcode of clients",
   "city": "City of clients",
   "state": "State of clients",
   "responsible": "Responsible of clients",
   "email": "Email of clients",
   "phone": "Phone of clients",
   "obs": "Obs of clients"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/clients[/:clients_id]"
       }
   }
   "name": "Name of clients",
   "document": "Document of clients",
   "address": "Address of clients",
   "zipcode": "Zipcode of clients",
   "city": "City of clients",
   "state": "State of clients",
   "responsible": "Responsible of clients",
   "email": "Email of clients",
   "phone": "Phone of clients",
   "obs": "Obs of clients"
}',
            ),
            'PUT' => array(
                'description' => 'Atualiza um cliente | Update a client',
                'request' => '{
   "name": "Name of clients",
   "document": "Document of clients",
   "address": "Address of clients",
   "zipcode": "Zipcode of clients",
   "city": "City of clients",
   "state": "State of clients",
   "responsible": "Responsible of clients",
   "email": "Email of clients",
   "phone": "Phone of clients",
   "obs": "Obs of clients"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/clients[/:clients_id]"
       }
   }
   "name": "Name of clients",
   "document": "Document of clients",
   "address": "Address of clients",
   "zipcode": "Zipcode of clients",
   "city": "City of clients",
   "state": "State of clients",
   "responsible": "Responsible of clients",
   "email": "Email of clients",
   "phone": "Phone of clients",
   "obs": "Obs of clients"
}',
            ),
            'DELETE' => array(
                'description' => 'Deleta um cliente | Delete a client',
                'request' => '{
   "name": "Name of clients",
   "document": "Document of clients",
   "address": "Address of clients",
   "zipcode": "Zipcode of clients",
   "city": "City of clients",
   "state": "State of clients",
   "responsible": "Responsible of clients",
   "email": "Email of clients",
   "phone": "Phone of clients",
   "obs": "Obs of clients"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/clients[/:clients_id]"
       }
   }
   "name": "Name of clients",
   "document": "Document of clients",
   "address": "Address of clients",
   "zipcode": "Zipcode of clients",
   "city": "City of clients",
   "state": "State of clients",
   "responsible": "Responsible of clients",
   "email": "Email of clients",
   "phone": "Phone of clients",
   "obs": "Obs of clients"
}',
            ),
        ),
    ),
    'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
        'description' => 'Usuários do sistema | Systems users',
        'collection' => array(
            'description' => 'Usuários cadastrados no sistemas | Users registered systems',
            'GET' => array(
                'description' => 'Lista de todos os usuários | List all users',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users"
       },
       "first": {
           "href": "/users?page={page}"
       },
       "prev": {
           "href": "/users?page={page}"
       },
       "next": {
           "href": "/users?page={page}"
       },
       "last": {
           "href": "/users?page={page}"
       }
   }
   "_embedded": {
       "users": [
           {
               "_links": {
                   "self": {
                       "href": "/users[/:users_id]"
                   }
               }
              "username": "Username of users",
              "first_name": "Fisrt name of users",
              "last_name": "Last name of users"
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Criar um novo usuário | Create a new user',
                'request' => '{
   "username": "Username of users",
   "first_name": "Fisrt name of users",
   "last_name": "Last name of users"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:users_id]"
       }
   }
   "username": "Username of users",
   "first_name": "Fisrt name of users",
   "last_name": "Last name of users"
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'description' => 'Retorna um usuário | Return a user',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:users_id]"
       }
   }
   "username": "Username of users",
   "first_name": "Fisrt name of users",
   "last_name": "Last name of users"
}',
            ),
            'PUT' => array(
                'description' => 'Atualiza um usuário | Update a user',
                'request' => '{
   "username": "Username of users",
   "first_name": "Fisrt name of users",
   "last_name": "Last name of users"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:users_id]"
       }
   }
   "username": "Username of users",
   "first_name": "Fisrt name of users",
   "last_name": "Last name of users"
}',
            ),
            'DELETE' => array(
                'description' => 'Deleta um usuário | Delete a user',
                'request' => '{
   "username": "Username of users",
   "first_name": "Fisrt name of users",
   "last_name": "Last name of users"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:users_id]"
       }
   }
   "username": "Username of users",
   "first_name": "Fisrt name of users",
   "last_name": "Last name of users"
}',
            ),
            'PATCH' => array(
                'description' => 'Atualiza parcialmente um usuário | Update partially a user',
                'request' => '{
   "username": "Username of users",
   "first_name": "Fisrt name of users",
   "last_name": "Last name of users"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/users[/:users_id]"
       }
   }
   "username": "Username of users",
   "first_name": "Fisrt name of users",
   "last_name": "Last name of users"
}',
            ),
            'description' => 'Entidade users | Users entity',
        ),
    ),
    'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
        'description' => 'Tipos de pagamentos | Handles payments types',
        'collection' => array(
            'description' => 'Coleção de Tipos de Pagamentos | Collection PaymentsTypes',
            'GET' => array(
                'description' => 'Lista todos os tipos de pagamentos | List all payment types',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes"
       },
       "first": {
           "href": "/ptypes?page={page}"
       },
       "prev": {
           "href": "/ptypes?page={page}"
       },
       "next": {
           "href": "/ptypes?page={page}"
       },
       "last": {
           "href": "/ptypes?page={page}"
       }
   }
   "_embedded": {
       "ptypes": [
           {
               "_links": {
                   "self": {
                       "href": "/ptypes[/:ptypes_id]"
                   }
               }
              "name": "Nome do tipo de pagamento | Name of playment type"
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Criar um novo tipo de pagamento | Create a new payment type',
                'request' => '{
   "name": "Nome do tipo de pagamento | Name of playment type"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
   "id": "ID do tipo de pagamento | ID of payment type"
   "name": "Nome do tipo de pagamento | Name of playment type"
}',
            ),
        ),
        'entity' => array(
            'description' => 'Entidade PaymentType | PaymentType Entity',
            'GET' => array(
                'description' => 'Retorna um tipo de pagamento | Returns a payment type',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
   "id": "ID do tipo de pagamento | ID of payment type"
   "name": "Nome do tipo de pagamento | Name of playment type"
}',
            ),
            'PATCH' => array(
                'description' => 'Atualiza parcialmente um tipo de pagamento | Update partially a payment type',
                'request' => '{
   "name": "Nome do tipo de pagamento | Name of playment type"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
    "id": "ID do tipo de pagamento | ID of payment type"
    "name": "Nome do tipo de pagamento | Name of playment type"
}',
            ),
            'PUT' => array(
                'description' => 'Atualiza um tipo de pagamento | Update a payment type',
                'request' => '{
   "name": "Nome do tipo de pagamento | Name of playment type"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
   "id": "ID do tipo de pagamento | ID of payment type"
   "name": "Nome do tipo de pagamento | Name of playment type"
}',
            ),
            'DELETE' => array(
                'description' => 'Deleta um tipo de pagamento | Delete a payment type',
                'request' => '{
   "name": "Nome do tipo de pagamento | Name of playment type"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/ptypes[/:ptypes_id]"
       }
   }
    "id": "ID do tipo de pagamento | ID of payment type"
   "name": "Nome do tipo de pagamento | Name of playment type"
}',
            ),
        ),
    ),
);
