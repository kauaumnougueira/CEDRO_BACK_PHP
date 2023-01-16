<?php 
include('../model/banco/conexao.php');
include('../model/banco/identificacao_banco.php');

if(isset($_POST['usuario']) || isset($_POST['senha'])){
    if(strlen($_POST['usuario']) == 0){
        echo "<script>alert('preencha sua usuario'); window.location.replace('http://localhost/PHP-BACK-CEDRO/index.php');</script>";
    }else if(strlen($_POST['senha']) == 0){
        echo "<script>alert('preencha seu senha'); window.location.replace('http://localhost/PHP-BACK-CEDRO/index.php');</script>";
    }else{
        $email = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        existeBanco($mysqli, $email, $senha);
    }
}