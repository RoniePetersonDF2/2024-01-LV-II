<?php
require 'src/models/database/database.php';
require 'src/models/dao/usuariodao.php';

$conn = Database::getConnection();
var_dump($conn);

$dao = new UsuarioDAO($conn);
var_dump($dao->getAll());

var_dump($dao->getByEmail('user02@email.com'));

$lastId = $dao->create(
    'analista01',
    'analista01@email.com',
    '123',
    'ANALISTA',
    1
);

var_dump($dao->getById($lastId));

$value = $dao->update(
    $lastId,
    'analista01',
    'analista01@email.com',
    'secret',
    'USUARIO',
    0        
);
var_dump($dao->getById($lastId));

$dao->delete($lastId);

var_dump($dao->getAll());
