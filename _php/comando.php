<?php
include('./_php/pass.php');

$ip = '';
$port = 22;
$user = '';

$connection = ssh2_connect($ip, $port);
ssh2_auth_password($connection, $user, $pass);

$script = isset($_POST['comando']) ? $_POST['comando'] : '';

ssh2_exec($connection, $script);

// var_dump ($stream);

// phpinfo();
//$conexao = ssh2_connect($ip, 22);
//var_dump(get_loaded_extensions());
//$connection = ssh2_connect($ip, 22);
//echo 'Current PHP version: ' . phpversion();
//$ssh = new SSH2($ip);
//$ssh->auth($user,$pass);
?>