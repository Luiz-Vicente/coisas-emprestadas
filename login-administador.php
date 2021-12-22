<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
        <?php
            if(isset($_GET['autentica'])){
                echo "<p  class='erro'>Você não têm permissão de acesso</p>";
            }
        ?>
    <main>
        <h1>Login</h1>
        <?php
            if(isset($_GET['erro'])){
                echo "<p   class='erro'>Usuario ou senha incorretos</p>";
            }
        ?>
        <form method="POST" action="./php/login-admin.php">
            <input name="email" placeholder="E-mail" type="email">
            <input name="senha" placeholder="Senha" type="password">
            <button type="submit">Entrar</button>
        </form>
    </main>
</body>
</html>