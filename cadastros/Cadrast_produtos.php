    <?
    include 'conexao.php';
    require_once 'cadastrar.php';

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="../sistem_web/css/cadastro.css" rel="stylesheet">
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
            <h2>Lista de <b>Produtos</b></h2>
            </div>

            <div class="col-sm-6">
            <!--tag para cadastrar produtos-->
                <a href="#addEmployeeModal" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#meuModal"><i class="material-icons">&#xE147;</i> <span>Cadastrar Produtos</span></a>
                <!--tag para deletar produtos-->
                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>      
        </div>
            </div>
    </div>
                <!--tags da tabela de apresentação dos produtos cadastrados-->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                    </th>

                        <th>Id</th>
                        <th>Produtos</th>
                        <!--<th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>-->
                </tr>
            </thead>

        </table>

                <br>
                <br>
                    
            </div>

        </div>

                <!--iniciando Modal -->
        <div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="meuModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">
        <div class="modal-content" >

            <div class="modal-header" >
                <h5 class="modal-title" id="ModalLabel">Cadastro de produtos</h5>
                    <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>

               
                    <div class="modal-body">

                        <form class="p-4 p-md-5 border rounded-3 bg-light" id="form_cadastro" action="../../sistem_web/PhpConect/cadastrar.php" method="POST" enctype="multipart/form-data">    

                            <!-------------------------Codigo----------------------------->
                            <div  class="col-md-4">
                                <label for="codigo" class="control-label">codigo</label>
                                <input type="number" name="codigo" id="codigo" class="form-control"> <!--type de text para numero-->
                            </div>

                            <!-------------------------Produto---------------------------->
                            <div class="form-group">
                                <label for="produto" class="control-label">Produto</label>
                                <input type="text" name="produto" id="produto" class="form-control">
                            </div>

                                <br>
                            <!----------------------------Tipos---------------------------->
                            <!-- <div class="form-group">
                                    <select for="tipos" class="form-select" id="tipos" name="tipos" required>
                                        <option selected disabled value="">Tipos..</option>
                                        <option>Polo</option>
                                        <option>camiseta</option>
                                        <option>....</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid state.
                                    </div>
                                </div>-->

                            <!-------------------------Preço------------------------------->
                            <div class="form-group">
                                <label for="preco" class="control-label">Preço</label>
                                <input type="number" id="preco" name="preco" min="0" required placeholder="0,00" lang="en" step="0.25" class="form-control">
                                <!---<input type="number" name="preco" id="preco" onchange="setTwoNumberDecimal" min="0" max="100" step="0.25" value="0.00" />-->
                            </div><!-----verificar o lançamento dos valores no banco de dados----->

                            <!-------------------------Detalhes------------------------------->
                            <div class="form-group">
                                <label for="detalhes" class="control-label">Detalhes</label>
                                <input type="text" name="detalhes" id="detalhes" class="form-control">
                            </div>

                            <!------------------------butão do modal-------------------------->
                            <div class="modal-footer col-12" >
                                <input type="submit" class="btn btn-secondary" data-bs-dismiss="modal" value="Fechar">
                                <input type="submit" name="addnew" class="btn btn-primary"  value="Salvar">
                            </div> 
                            
                        </form> 
                
                    </div>
               

        </div>
        </div>
        </div>

        <!--fim de modal-->






    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <!--- <script src="../sistem_web/js/cadastro.js"></script>--->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </body>
    </html>