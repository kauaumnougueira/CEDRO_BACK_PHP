<?php 
include('session.php');

function existeBanco($mysqli, $usuario, $senha){
    $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do sql");
    $quantidade = $sql_query->num_rows;

    if($quantidade >= 1){
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();
            $_SESSION['logged_in'] = true;
            manage_session();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: http://localhost/PHP-BACK-CEDRO/painel.php");

    }else{
        echo "<script>alert('email ou senha incorretos'); window.location.replace('http://localhost/PHP-BACK-CEDRO/index.php');</script>";
    }
}