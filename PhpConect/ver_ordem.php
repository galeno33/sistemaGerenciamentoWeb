<?php

    include "conexao.php"; // Carrega os dados da conexão!	    
	include "sessão.php";





 // Bloco que realiza o papel do Read - recupera os dados e apresenta na tela
 try {
    $stmt = $conn->prepare("SELECT * FROM `ordem_servico` WHERE ");
        if ($stmt->execute()) {
            while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>".$rs->numero_ordem."</td><td>".$rs->nome_cliente."</td><td>".$rs->telefone."</td><td>".$rs->produto."</td><td>".$rs->detalhes_produto
                           ."</td><td><center><a href=\"\">[Alterar]</a>"
                           ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                           ."<a href=\"\">[Excluir]</a></center></td>";
                echo "</tr>";
            }
        } else {
            echo "Erro: Não foi possível recuperar os dados do banco de dados";
        }
} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}






























   /* $sql = "SELECT * FROM ordem_servico";
    $result = $conn->query($sql);
    
    
    if( $result->num_rows > 0)
    {

        //============informar os valores de acordo com as variaveis no html=============
        while( $row = $result->fetch_assoc()){
          //  echo "<form action='' method='POST'>"; //added
            //echo "<input type='hidden' value='". $row['user_id']."' name='userid' />"; //added
            echo "<tr>";
            echo "<td>".$row['numero_ordem'] . "</td>";//buscar no arquivo ordem de serviços
            echo "<td>".$row['nome_cliente'] . "</td>";
            echo "<td>".$row['telefone'] . "</td>";
            echo "<td>".$row['produto'] . "</td>";
            echo "<td>".$row['detalhes_produto'] . "</td>";
            //echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";
            //echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
            echo "</tr>";
           // echo "</form>"; //added
        }

    }
    else
    {
        echo "<br><br>No Record Found";
    }
*/




?>