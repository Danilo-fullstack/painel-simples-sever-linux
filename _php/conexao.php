<?php
define('host', '127.0.0.1');
define('usuario', 'phpmyadmin');
define('senha', 'toor#');
define('db', 'login');

$conexao = mysqli_connect(host, usuario, senha, db) or die ('Não foi possível conectar ao servidor');
?>