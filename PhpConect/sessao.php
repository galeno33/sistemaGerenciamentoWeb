<?php
    //iniciar sessão
    session_start();

    if(isset($_SESSION["usuario"]) && $_SESSION["senha"] === true){
        header( 'Location: http://localhost/projetos/sistem_web/');
        exit;
    }

?>