<?php
// echo ('Hello');
// include('./_php/pass.php');

// $ip = '191.252.192.195';
// $port = 22;
// $user = 'root';

// $connection = ssh2_connect($ip, $port);
// ssh2_auth_password($connection, $user, $pass);

// $script = isset($_POST['comando']) ? $_POST['comando'] : '';

// ssh2_exec($connection, $script);

// shell_exec('chage -l danilo.dev');
// $comando = shell_exec('ls');

$output = shell_exec('ls');
echo "<p>$output</p>";
?>