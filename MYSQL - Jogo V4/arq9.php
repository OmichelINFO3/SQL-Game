<html>
<head>
	<Title>Quiz!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1 id="titulo">Quiz MySQL</h1>
	<div id="questoes">
		<h2>Questão 7<h2>
		<h3>O cliente gabriel, de id 54, removeu seu cadastro de nosso site, remova os dados de gabriel que estão salvos atualmente no nosso banco de dados.</h3><br><br>
		<h4>Dados da tabela cliente: nome, idade, id</h4>
	</div>
	<div id="form">
		<form action="Arq9.php" method="POST">
				<input type="text" class="resp" name="resposta"><br><br>
				<input type="submit" value="Responder" id="benvia" name="envia">
		</form>
	</div>
		<footer>
		<p>Produção - Vinicius Michel, Eduardo Roque Moura, Victor Lucardo</p>
		<p><a href="arq1.php">Voltar ao inicio</a></p>
		<p>INFO III - IFsul Campus Santana Do Livramento - 2023</p>
	</footer>
</body>
</html>
<?php
session_start();
@$id = $_SESSION['id'];
if (isset($_POST['envia'])) {

@$r = $_POST['resposta'];

$con = mysqli_connect("localhost","root","","jogo");
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 exit();
}

$resposta_usuario = str_replace(' ', '', strtolower($r));
$resposta_correta1 = str_replace(' ', '', strtolower("delete from cliente where id=54"));
$resposta_correta2 = str_replace(' ', '', strtolower("delete from cliente where nome='gabriel'"));

if($resposta_usuario == $resposta_correta1 or $resposta_usuario == $resposta_correta2){
Echo "<p style='color:green; text-align: center; font-weight:bold; font-family: verdana;'>Correto!</p>";
mysqli_query($con,"update usuario set pontos = pontos + 1 where iduser=$id");
header ("refresh: 1; url=arq10.php");
}

else{
Echo "<p style='color:red; text-align: center; font-weight:bold; font-family: verdana;'>Errado!</p>";
header ("refresh: 1; url=arq10.php");
}
}


?>