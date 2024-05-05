<html>
<head>
	<Title>Quiz!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1 id="titulo">Quiz MySQL</h1>
	<div id="geral">
		<h3 id="historia">Para começar, insira o seu nome e ID.</h3>
		<div id="form">
			<form action="Arq2.php" method="POST">
				<input type="text" value="Nome" name="nome" class="resp">
				<input type="text" value="ID" name="id" class="resp"><br><br>
				<input type="submit" value="Enviar" id="benvia" name="envia">
			</form>
		</div>
	</div>
		<footer>
		<p>Produção - Vinicius Michel, Eduardo Roque Moura, Victor Lucardo</p>
		<p><a href="arq1.php">Voltar ao inicio</a></p>
		<p>INFO III - IFsul Campus Santana Do Livramento - 2023</p>
	</footer>
</body>
</html>
<?php

if (isset($_POST['envia'])) {
	
@$nome = $_POST['nome'];
@$id = $_POST['id'];
session_start();
$_SESSION['id'] = $id;
$con = mysqli_connect("localhost","root","","jogo");
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 exit();
}
mysqli_query($con,"insert into usuario(iduser,nome,pontos) values($id, '$nome',0)");
Echo "<p style='color:green; text-align: center; font-weight:bold; font-family: verdana;'>Prepare-se!</p>";
header ("refresh: 1; url=arq3.php");
}


?>