
var meuModal = document.getElementById('meuModal');
var meuInput = document.getElementById('meuInput');

meuModal.addEventListener('shown.bs.modal', function () {
  meuInput.focus();
});

//===============modificar os codigos diacordo com o que eu desejar
//===============implementar para cadastras produtos no banco de dados
function CadastroProd()
{
    //=====================cadastro.php
    // conecta ao servidor
	var xmlhttp = new XMLHttpRequest();
 
	/* colocar na url os valores que quer passar para o servidor.
	   seu arquivo PHP deverá capturar os dados usando $_GET[]; */
    var url = "http://localhost/projetos/sistem_web/PhpConect/cadastrar.php?produto=" + document.getElementById('opcoesProd').value;//modificar o nome_aluno por opções 
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	alert("Gravado com sucesso no servidor");
}







//