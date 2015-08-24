<?php
return array(
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
                'description' => 'Retorn um tipo de pagamento | Returns a payment type',
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
                'description' => 'Atualiza parciamento um tipo de pagamento | Update partialy a payment type',
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
