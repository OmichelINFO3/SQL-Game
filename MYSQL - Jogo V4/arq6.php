<html>
<head>
	<Title>Quiz!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1 id="titulo">Quiz MySQL</h1>
	<div id="questoes">
		<h2>Questão 4<h2>
		<h3>Qual dos comandos abaixo, possui a sintaxe correta do MySQL para completar o seguinte comando create table?</h3><br><br>
		<h4> create table Cliente(
			id_cli int,
			endereco varchar(100),
			idade int,
			telefone varchar(12),
			_______ ___ ______
			);
		<p style="font-weight: bold;">A) Primary Key (idcli),</p><br>
		<p style="font-weight: bold;">B) Primary_Key (idcli);</p><br>
		<p style="font-weight: bold;">C) Primary Key (id_cli);</p><br>
		<p style="font-weight: bold;">D) Primary Key (id_cli)</p>
	</div>
	<div id="form">
		<form action="Arq6.php" method="POST">
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

if($r == "d" or $r=="D"){
Echo "<p style='color:green; text-align: center; font-weight:bold; font-family: verdana;'>Correto!</p>";
mysqli_query($con,"update usuario set pontos = pontos + 1 where iduser=$id");
header ("refresh: 1; url=arq7.php");
}

else{
Echo "<p style='color:red; text-align: center; font-weight:bold; font-family: verdana;'>Errado!</p>";
header ("refresh: 1; url=arq7.php");
}
}


?>