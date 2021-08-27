var u_usuario = window.document.getElementById('usuario');
var s_senha = window.document.getElementById('senha');
var username = window.document.getElementById('username');
//var sistem = express();
var container = document.getElementById('container');

   $.ajax({
       url:'http://localhost/projetos/sistem_web/PhpConect/login.php',
       method:'POST',
       data: {usuario: u_usuario},
       dataType:'json'
   }).done(function(result){
            username.innerHTML=result   
   });
