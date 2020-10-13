<?php

/*

Boards:

Create a Boars = POST /1/boards/

Add a Member to a Board = PUT /1/boards/{id}/members/{idMember}

Create a List on a Board = POST /1/boards/{id}/lists

Get Lists on a Board = GET /1/boards/{id}/lists

Get Cards on a Board = GET /1/boards/{id}/cards

*/


require_once 'api.php';

$trello = new trello_api;

//Método que lista todos os quadros criados pelo usuário

$data = $trello->request('GET', ('/1/members/me/boards?fields=name,url'));

echo '<pre>';
var_dump($data);
echo '</pre>';


$data = $trello->request('GET', ('/1/members/me/boards'));

echo '<pre>';
var_dump($data);
echo '</pre>';




//cria um quadro

// //Deve conter o nome como request.

// $data = $trello->request('POST',('/1/boards/'),array('name' => 'DEV - TICKETS'));

// echo '<pre>';
// var_dump($data);
// echo '</pre>';


// Consultar as listas que estão contidas no quadro

$data = $trello->request('GET', ('/1/boards/idboard/lists'));

echo '<pre>';
var_dump($data);
echo '</pre>';



//Fazer o Uptade do quadro


$data = $trello->request('PUT','/1/boards/idboard',array('name' => 'nome do board','desc' => 'descrição'));

echo '<pre>';
var_dump($data);
echo '</pre>';

// Consultar todos os cards em um determinado quadro;

$data = $trello->request('GET', ('/1/boards/idboard/cards'));

echo '<pre>';
var_dump($data);
echo '</pre>';

//Excluír um quadro

$data = $trello->request('DELETE', ('/1/boards/idboar'));


echo '<pre>';
var_dump($data);
echo '</pre>';
