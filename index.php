<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/login.css">
    <script src="https://kit.fontawesome.com/7d2e722761.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <section>
        <div class="box-login">
            <div class="title-login">
                <h3>Login</h3>
            </div>
            <form method="POST" action="./_php/login.php">
                <div class="div-input">
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="div-input">
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="div-input submit">
                    <input type="submit" value="Entrar">
                </div>
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div class="erro-login">
                    <i class="fas fa-times-circle"></i>
                    <p> Usuário ou senha incorreto, tente novamente.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
            </form>
        </div>
    </section>
</body>
</html>