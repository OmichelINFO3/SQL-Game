<?php
session_start();
@$id = $_SESSION['id'];


$con = mysqli_connect("localhost","root","","jogo");
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 exit();
}

$result = mysqli_query($con,"select * from usuario where iduser = $id");
$row = mysqli_fetch_assoc($result);
$nome = $row['nome'];
$pontos = $row['pontos'];

?>
<html>
<head>
	<Title>Quiz!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1 id="titulo">Quiz MySQL</h1>
	<div id="questoes">
		<h2>Fim do quiz!<h2>
		<?php 
		if($pontos > 5){
		echo "<h3>Parabens $nome, você marcou um total de $pontos pontos!</h3>";
		echo "<h3> gostaria de recomeçar o jogo?</h3>";
		echo "<a href='arq1.php' style='color:green; text-align: center; font-weight:bold; font-family: verdana;'>Sim!</a>";
		}
		
		else{
		echo "<h3>$nome, você marcou um total de $pontos pontos, mais sorte da próxima vez.</h3>";
		echo "<h3> gostaria de recomeçar o quiz?</h3>";
		echo "<a href='arq1.php' style='color:green; text-align: center; font-weight:bold; font-family: verdana;'>Sim!</a>";
		}
		?>
	</div>
	</div>
		<footer>
		<p>Produção - Vinicius Michel, Eduardo Roque Moura, Victor Lucardo</p>
		<p><a href="arq1.php">Voltar ao inicio</a></p>
		<p>INFO III - IFsul Campus Santana Do Livramento - 2023</p>
	</footer> 
</body>
</html>