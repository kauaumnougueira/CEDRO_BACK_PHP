<?php 
include('session.php');

function set_time_cookie(){
    //$tempo_de_sessao = 60;
    //session_set_cookie_params($tempo_de_sessao);
    ini_set('session.gc_maxlifetime', 30);
}

function existeBanco($mysqli, $usuario, $senha){
    $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do sql");
    $quantidade = $sql_query->num_rows;

    if($quantidade >= 1){
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
            set_time_cookie();
            session_start();
            $_SESSION['logged_in'] = true;
            if(!manage_session()){
                header('Location: http://localhost/PHP-Login/controller/login.php');
            }
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

    }else{
        echo "<script>alert('email ou senha incorretos'); window.location.replace('http://localhost/PHP-BACK-CEDRO/index.php');</script>";
    }
}