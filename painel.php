<?php
session_start();
include('./_php/verifica_login.php');
include('./_php/comando.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <!-- <form action="./_php/comando.php" method="post">
        <input type="text" name="comando" value="grep 'danilo.dev' /etc/shadow | cut -d: -f8">
        <input type="submit" value="Enviar Comando">
    </form>
    <h2><a href="./_php/logout.php">Sair</a></h2> -->
    <?php
    //    showUsers();
    //    var_dump($arrayUsers);
    ?>
</body>
</html>