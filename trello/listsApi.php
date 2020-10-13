<?php

/*

Get a List = GET /1/lists/{id}

Update a List = PUT /1/lists/{id}

Create a new List = POST /1/lists

Get Cards in a List = GET /1/lists/{id}/cards

*/

require_once 'api.php';

$trello = new trello_api;

$data = $trello -> request('POST','/1/list', array(
    'name' => 'nome da fila ', 
    'idBoard' => 'id do board onde a fila sera add'));

echo '<pre>';
var_dump($data);
echo '</pre>';