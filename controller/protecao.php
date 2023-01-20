<?php 

include("model\banco\session.php");

if(!manage_session()){
    die("<script>alert('Voce não esta logado'); window.location.replace('http://localhost/PHP-BACK-CEDRO/index.php');</script>") ;
}

