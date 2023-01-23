<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\Users\kaua\Desktop\CEDRO\cedro-exames\resources\css\style.css">
    <title>Login</title>
</head>
<body>
    <div id="login">
        <form action="http://localhost/PHP-BACK-CEDRO/controller/login.php" method="POST" class="card">
            <div style="margin: 20px;" class="card-content-header">
                <img src="view\img\cedro_logo.png" alt="cedro_logo" width="300px" height="135px">
            </div>
            <div class="card-content">
                <div style="margin: 10px;" class="card-content-area">
                    <label style="margin-right: 6px;">Usuário:</label>
                    <input type="text" name="usuario" class="inp_text">
                </div>
                <div style="margin: 10px;" class="card-content-area">
                    <label style="margin-right: 25px;">Senha:</label>
                    <input type="password" name="senha" class="inp_text">
                </div>
            </div>
            <div class="card-footer">
                <div class="card-footer-area">
                    <p class="link"><a href="https://labcedro.com.br/" target="_blank">
                        esqueci minha senha
                    </a></p>
                </div>
                <div class="card-footer-area">
                    <div>
                        <input type="submit" value="Entrar" class="inp_button">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
