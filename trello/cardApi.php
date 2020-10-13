<?php

/*Important Methods
POST /1/cards - Create a new card on a List

PUT /1/cards/[card id or shortlink] - Update the contents of a Card

POST /1/cards/[card id or shortlink]/actions/comments - Add a comment to a Card

POST /1/cards/[card id or shortlink]/idMembers - Add a member to a Card
*/


require_once 'api.php';

$trello = new trello_api;


//Criar Um cartão

//Passar no array o nome, descrição do card, e id da lista inde o card será adicionado



$data = $trello->request('POST', '/1/card', array (
    'name' => 'nome do card',
    'desc' => 'descrição do card',
    'idList' =>'id da lista onde o card sera add'));


 $id = $data->id;
 echo "<p>id: $id</p>";
 $consulta = '/1/cards/'.$id;

 $data = $trello->request('GET', $consulta);

 echo '<pre>';
 var_dump($data);
 echo '</pre>';


//Chama um cartão específico

//Passar na requisição o id di card que quer consultar

$data = $trello->request('GET', ('/1/cards/idcard'));

echo '<pre>';
var_dump($data);
echo '</pre>';











