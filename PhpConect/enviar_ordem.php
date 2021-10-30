<?php

	include "conexao.php"; // Carrega os dados da conexão!	
	//include "sessão.php";


  //=================codigo para buscar informações do ordem de serviço======================//


if(isset($_POST['enviar'])){
    if( empty($_POST['numeroOrdem']) || empty($_POST['nomeCliente']) 
        || empty($_POST['telefone']) || empty($_POST['produto']) || empty($_POST['detalhes']) )//====buscar do html
    {
        echo "Please fillout all required fields";
    }else{
        $numOrdem = $_POST['numeroOrdem'];
        $nomCliente = $_POST['nomeCliente'];//===relacionar name="produto" e criando um variavel
        $telefone = $_POST['telefone'];
        $produto = $_POST['produto'];
        $detalhe = $_POST['detalhes'];
        
        $sql = "INSERT INTO `ordem_servico`(`numero_ordem`, `nome_cliente`, `telefone`, `produto`, `detalhes_produto`)
         VALUES ($numOrdem,'$nomCliente','$telefone','$produto','$detalhe')";//inserir os outros campos do formulario de cadastro de produtos


        if( $conn->query($sql) === TRUE){
            //Alerta após o lançamento da ordem de serviços e o retorna ao formulario de lançamento
            echo  "<script>alert('Cadastro enviado com Sucesso!');location='../../sistem_web/sevicos/LancaOrdens.php';</script>";
            // "<div class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog'> Informações cadastradas com sucesso</div>";
        }else{
            echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
        }
    }
}
?>