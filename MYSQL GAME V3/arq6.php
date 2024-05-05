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
		<h3>Qual dos comandos abaixo, possui a sintaxe correta do MySQL caso tenhamos que retornar todos os dados do usuario de id 1?</h3><br><br>
		<h4>A) Select all from pessoa where id == 1</h4><br><br>
		<h4>B) Select * from pessoa where id == 1</h4><br><br>
		<h4>C) Select * from pessoa where id = 1</h4><br>
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

if($r == "c"){
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