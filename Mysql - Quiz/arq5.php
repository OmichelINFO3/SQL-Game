<html>
<head>
	<Title>Quiz!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1 id="titulo">Quiz MySQL</h1>
	<div id="questoes">
		<h2>Questão 3<h2>
		<h3>Qual o comando correto a ser utilizado caso seja nescessario alterar uma tabela?</h3><br>
	</div>
	<div id="form">
		<form action="Arq5.php" method="POST">
				<input type="text" class="resp" name="resposta"><br><br>
				<input type="submit" value="Enviar" id="benvia" name="envia">
		</form>
	</div>
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

if($r == "alter table"){
Echo "<p style='color:green; text-align: center; font-weight:bold; font-family: verdana;'>Correto!</p>";
mysqli_query($con,"update usuario set pontos = pontos + 1 where iduser=$id");
header ("refresh: 1; url=arq6.php");
}

else{
Echo "<p style='color:red; text-align: center; font-weight:bold; font-family: verdana;'>Errado!</p>";
header ("refresh: 1; url=arq6.php");
}
}


?>