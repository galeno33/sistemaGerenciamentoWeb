<?php
        //session_start();
        include ("../PhpConect/conexao.php");
        
?>       
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordens de Serviços</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../sistem_web/bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../../sistem_web/dashboard/home.html">NOME DA EMPRESA</a>
        <div>
                <div class="page-header clearfix">
                   <!---<h2 class="pull-left">Users</h2>--->    
                    <a href="../sevicos/LancaOrdens.php" class="btn btn-success pull-right">voltar</a>
                </div>
            </div>
        <!--<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>-->
        <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
       
    </header>
        <table border = '2' class="table table-striped table-hover">
            <tr>
            <td>Nº</td>
            <td>CLIENTE</td>
            <td>CONTATO</td>
            <td>PRODUTO</td>
            <td>DETALHES</td>
            </tr>
        
                 
                
<?php


                    $sql = "SELECT * FROM ordem_servico";
                    $result = mysqli_query($conn, $sql) or die ("Erro ao tentar consultar ordens");

                        //if(($result) AND ($result->num_rows != 0)){
                            while($row = mysqli_fetch_assoc($result)){
                                $ordem = $row['numero_ordem'];
                                $nomeCliente = $row['nome_cliente'];
                                $contato = $row['telefone'];
                                $produto = $row['produto'];
                                $detalhes = $row['detalhes_produto'];
                              
                                
                                echo "<tr>";
                                echo "<td>".$ordem."</td>";
                                echo "<td>".$nomeCliente."</td>";
                                echo "<td>".$contato."</td>";
                                echo "<td>".$produto."</td>";
                                echo "<td>".$detalhes."</td>";                              
                                echo "</tr>";
                                
                                
                            }
                           // mysqli_close($conn);
                        //}

       // echo "</table>";
            
?>
</table>    

<script src="../bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script> 

</body>
</html>