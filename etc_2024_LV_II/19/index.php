<?php
require 'src/models/database/database.php';
require 'src/models/dao/usuariodao.php';

$conn = Database::getConnection();
var_dump($conn);
