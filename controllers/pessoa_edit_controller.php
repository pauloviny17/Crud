<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CRUD/models/pessoa.php';

$id = $_POST['id'];
$nome = $_POST['nome'];

$pessoa = new Pessoa($id);
$pessoa->setNome($nome);
$pessoa->atualizar();
header('location: /CRUD/index.php');
exit();