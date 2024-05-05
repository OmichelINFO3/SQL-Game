<html>
<head>
	<Title>Quiz!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1 id="titulo">Quiz MySQL</h1>
	<div id="questoes">
		<h2>Questão 8<h2>
		<h3>DQL é uma sigla usada para definir declarações (ou funções) que manipulam os dados dentro do banco, dentre as funções temos: insert, update, delete</h3><br><br>
		<h4>Verdadeiro ou Falso?</h4><br><br>
	</div>
	<div id="form">
		<form action="Arq10.php" method="POST">
				<input type="submit" value="Falso" id="bencerra" name="bencerra">
				<input type="submit" value="Verdadeiro" id="benvia" name="benvia">
		</form>
	</div>
</body>
</html>
<?php
session_start();
@$id = $_SESSION['id'];

@$r = $_POST['resposta'];

$con = mysqli_connect("localhost","root","","jogo");
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 exit();
}

if (isset($_POST['bencerra'])){
Echo "<p style='color:green; text-align: center; font-weight:bold; font-family: verdana;'>Correto!</p>";
mysqli_query($con,"update usuario set pontos = pontos + 1 where iduser=$id");
header ("refresh: 1; url=arq11.php");
}

if (isset($_POST['benvia'])){
Echo "<p style='color:red; text-align: center; font-weight:bold; font-family: verdana;'>Errado!</p>";
header ("refresh: 1; url=arq11.php");
}

?>