<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/CRUD/models/pessoa.php';
$id = $_POST ['id'];

$pessoa = new Pessoa($id);

$pessoa->deletar();

header('location: /CRUD/index.php');
exit();
