<?php
define('host', '127.0.0.1');
define('usuario', 'root');
define('senha', '');
define('db', 'login');

$conexao = mysqli_connect(host, usuario, senha, db) or die ('Não foi possível conectar ao servidor');
?>