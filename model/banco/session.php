<?php 
function manage_session(){
    session_start();
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
        return false; //não esta conectado
        exit;
    }else{
        return true; //esta conectado
    }
}