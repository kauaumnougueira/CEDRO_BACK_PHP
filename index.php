<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div id="login">
        <form action="http://localhost/PHP-BACK-CEDRO/controller/login.php" method="POST">
            <div style="margin: 20px;">
                <img src="view\img\cedro_logo.png" alt="cedro_logo" width="200px" height="90px">
            </div>
            <div style="margin: 10px;">
                <label style="margin-right: 6px;">Usuário</label>
                <input type="text" name="usuario">
            </div>
            <div style="margin: 10px;">
                <label style="margin-right: 18px;">Senha</label>
                <input type="password" name="senha">
            </div>
            <div>
                <input type="submit" value="Entrar">
            </div>
            <div>
                <p><a href="https://labcedro.com.br/" target="_blank">Não consegue logar? entre em contato com os laboratórios CEDRO</a></p>
            </div>
        </form>
    </div>
</body>
</html>