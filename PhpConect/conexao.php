<?php

            header("Access-Control-Allow-Origin: *");
            header('Content-Type: text/html; charset=utf-8');
            //$host = "mysql:host=localhost;dbname=sistem_loja";
            $host = "mysql:mysql380.umbler.com";//no lugar de localhost colar == mysql380.umbler.com(é o host do servidor online)
            $username = "sistemloja";//usuario do banco de dados
            $password = "lojasistem"; //senha do banco de dados
            $dbname = "sistem_loja";

            $conn = mysqli_connect($host, $username, $password, $dbname);
            //$dbname = mysql_select_db("sistem_loja");
           // $connect = new PDO($host, $username, $password, $dbname);
            if($conn === false){
                die("Erro na conexão." . mysqli_connect_error());
            }

?>