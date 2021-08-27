<?php
      
      
      include ('conexao.php');
      include ('sessao.php');
     
      $usuario = $_POST['nome'];
      $password = $_POST['password'];

       
        //to prevent from mysqli injection  
        $usuario = stripcslashes($usuario);  
        $password = stripcslashes($password);  
        $usuario = mysqli_real_escape_string($conn, $usuario);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * FROM usuario WHERE nome = '$usuario' and senha = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        
        if($count == 1){  
            ///echo "<h1><center> Longin bem sucedido </center></h1>"; 
            header('Location: http://localhost/projetos/sistem_web/dashboard/home.html');
               
            while($row_usuario = mysqli_fetch_assoc($result)){
                echo $row_usuario['nome'];
            }
            
        exit; 
        }  
        else{  
            echo "<h1> Falha no Login. Invalid username or password.</h1>"; 
            
            
        }           
      

?>