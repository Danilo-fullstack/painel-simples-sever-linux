<?php
// echo ('Hello');
// include('./_php/pass.php');

// $ip = '191.252.192.195';
// $port = 22;
// $user = 'root';

// $connection = ssh2_connect($ip, $port);
// ssh2_auth_password($connection, $user, $pass);

// if(empty($_POST[comando])) {
//     echo ('<strong><p>Campo INPUT vazio</p></strong>');
//     header('Location: ../painel.php');
//     exit();
// }
// $script = isset($_POST['comando']) ? $_POST['comando'] : '';

// ---- Funções ----

// Consulta data de vencimento de usuários
function vencimentoUser($nameUser) {
    $output = shell_exec("rm /var/www/html/_php/calcdata.txt");
    $script = "grep '$nameUser' /etc/shadow | cut -d: -f8";
    $output = shell_exec($script);
    $output = shell_exec("date -d '1970/01/01 + $output days' > /var/www/html/_php/calcdata.txt");
    $output = shell_exec("cut -d' ' -f2,3,6 /var/www/html/_php/calcdata.txt");
    $output = shell_exec("date -d'$output' '+%d-%m-%Y'");
    return $output;
}
// echo vencimentoUser("danilo.dev");

// Faz uma lista com todos os usuarios(do grupo"18615")
function listaUsers() {
    shell_exec("rm /var/www/html/_php/listausers.txt");
    shell_exec("grep '18615' /etc/shadow | cut -d: -f1 > /var/www/html/_php/listausers.txt");
}

// Conta linhas do arquivo listausers(OBS: requer que a listaUsers() tenha sido chamado primeiro)
function contaLinhas() {
    listaUsers();
    $output = shell_exec("wc -l /var/www/html/_php/listausers.txt | cut -d' ' -f1");
    $output = intval($output);
    return $output;
}
// --------------------------------------------




$rows = contaLinhas();
$users_name = [];
listaUsers();

for($i = 1; $i < $rows; $i++) {
    $users_name[$i] = shell_exec("sed -n '$i p' /var/www/html/_php/listausers.txt | cut -d: -f1");
    echo "$users_name[$i] <br>";
}
// echo $users_name[];









// $output = shell_exec("date -d '1970/01/01 + $output days'");
// echo "$output <br>";

// $output = shell_exec("date -d '$output' '+%Y-%m-%d'");
// echo "$output<br><br>";

// $output = shell_exec("cut -d' ' -f2,3,6 /var/www/html/_php/calcdata.txt");
// echo "$output <br>";

// function loopUsers() {

// }

// function showUsers() {
    // $output = shell_exec('grep "18615" /etc/shadow | cut -d: -f1');
    // echo "$output<br><br>";

    // var_dump($output);

    // $arrayUsers = explode(" ", $output);
    // print $arrayUsers[3];
//     return $arrayUsers;
// }




?>