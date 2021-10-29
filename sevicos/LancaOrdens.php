
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="#" rel="stylesheet">
    <link href="../bootstrap/assets/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ficha de cadasto</title>
</head>

<body>
    <br>
    <br>
    <h3 class="text-center text-success" id="message"></h3>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Ordem de <b>Serviço</b></h2>
                    </div>
                </div>
            </div>
            <!----------------------------------FORMULARIO DE ORDEM DE SERVIÇO----------------------------->
            <!------------------------------------numero da ordem------------------------------------------>
            <form class="p-4 p-md-5 border rounded-3 bg-light" id="form_cadastro" action="../../sistem_web/PhpConect/enviar_ordem.php" method="POST" enctype="multipart/form-data">
                <div class="col-md-2">
                    <label for="numeroOrdem">Nº:</label>
                    <input type="number" name="numeroOrdem" class="form-control" id="numeroOrdem">
                </div>

                <!------------------------------------nome do clientes------------------------------------------->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomeCliente">nome do cliente</label>
                        <input type="text" name="nomeCliente" class="form-control" id="nomeCliente">
                    </div>

                    <!------------------------------------telefone do cliente---------------------------------------->
                </div>
                <div class="col-md-2">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" class="form-control" id="telefone" placeholder="98511-5462" pattern="[0-9]{5}-[0-9]{4}" required>
                </div>

                <!-------------------------------------------Produto----------------------------------------------->
                <div class="col-md-4">
                    <label for="produto">Produto</label>
                    <input type="text" name="produto" class="form-control" id="produto" placeholder="produto.">
                </div>

                <br>

                <!------------------------------------Detalhes do produto------------------------------------------->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="detalhes">Detelhes do produto</label><br>
                        <textarea id="detalhes" name="detalhes" rows="5" cols="33"></textarea>
                    </div>
                </div>

                <!-----------------------------------------butão entrar---------------------------------------------->
                <input type="submit" name="enviar" class="btn btn-primary" value="Enviar">

            </form>

            <!--------------------------------------------fim do formulario------------------------------------------>

            <!---------------------------------------VER A ORDEM LANÇADA--------------------------------------------->
            <div class="p-4 p-md-5 border rounded-3 bg-light" >
                <div class="page-header clearfix">
                   <!---<h2 class="pull-left">Users</h2>--->    
                    <a href="../sevicos/verOrdem.php" class="btn btn-success pull-right">Ver Ordens</a>
                </div>
            </div>



            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <!--- <script src="../sistem_web/js/cadastro.js"></script>--->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>