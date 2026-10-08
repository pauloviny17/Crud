<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/CRUD/models/pessoa.php';

$nome = $_POST['nome'];

$pessoa = new Pessoa();

$pessoa->setNome($nome);

$pessoa->criar();

header('location: /CRUD/index.php');
exit();
