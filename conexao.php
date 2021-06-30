<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'mytruck');

// $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die (mysqli_connect_error());