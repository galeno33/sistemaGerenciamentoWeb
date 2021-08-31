<?php

	include "conexao.php"; // Carrega os dados da conexão!	
	include "sessão.php";


  //=================codigo para adaptar o cadastrar======================//


if(isset($_POST['addnew'])){
    if( empty($_POST['codigo']) || empty($_POST['produto']) 
        || empty($_POST['preco']) || empty($_POST['detalhes']) )//====buscar do html
    {
        echo "Please fillout all required fields";
    }else{
        $codigo = $_POST['codigo'];
        $produto = $_POST['produto'];//===relacionar name="produto" e criando um variavel
        $preco = $_POST['preco'];
        $detalhe = $_POST['detalhes'];
        
        $sql = "INSERT INTO `produtos`(`codigo_prod`, `nome_prod`, `preco_prod`, `detalhes_prod`)
         VALUES ($codigo,'$produto','$preco','$detalhe')";//inserir os outros campos do formulario de cadastro de produtos


        if( $conn->query($sql) === TRUE){
            echo "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Informações cadastradas com sucesso</div>";
        }else{
            echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
        }
    }
}
?>