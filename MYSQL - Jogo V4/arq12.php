<html>
<head>
	<Title>Quiz!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1 id="titulo">Quiz MySQL</h1>
	<div id="questoes">
		<h2>Questão 10<h2>
		<h3>Precisamos saber aonde reside nosso cliente mauricio, de id 12, e tambem precisamos saber o numero de sua encomenda.</h3><br><br>
		<h4>Considerando as tabelas cliente (nome, idade, endereco, id) e encomenda(numero, id, qtd, id_cliente), realise um select com join para retornar o endereco do cliente e o nome de sua encomenda.</h4><br><br>
	</div>
	<div id="form">
		<form action="Arq12.php" method="POST">
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
$resposta_correta1 = str_replace(' ', '', strtolower("select cliente.endereco, encomenda.numero from cliente inner join encomenda on cliente.id = encomenda.id_cliente where cliente.id=12"));
$resposta_correta2 = str_replace(' ', '', strtolower("select encomenda.numero, cliente.endereco from cliente inner join encomenda on cliente.id = encomenda.id_cliente where cliente.id=12"));
$resposta_correta3 = str_replace(' ', '', strtolower("select cliente.endereco, encomenda.numero from encomenda inner join cliente on cliente.id = encomenda.id_cliente where cliente.id=12"));
$resposta_correta4 = str_replace(' ', '', strtolower("select encomenda.numero, cliente.endereco from encomenda inner join cliente on cliente.id = encomenda.id_cliente where cliente.id=12"));
$resposta_correta5 = str_replace(' ', '', strtolower("select cliente.endereco, encomenda.numero from cliente inner join encomenda on encomenda.id_cliente = cliente.id where cliente.id=12"));
$resposta_correta6 = str_replace(' ', '', strtolower("select encomenda.numero, cliente.endereco from cliente inner join encomenda on encomenda.id_cliente = cliente.id where cliente.id=12"));
$resposta_correta7 = str_replace(' ', '', strtolower("select cliente.endereco, encomenda.numero from encomenda inner join cliente on encomenda.id_cliente = cliente.id where cliente.id=12"));
$resposta_correta8 = str_replace(' ', '', strtolower("select encomenda.numero, cliente.endereco from encomenda inner join cliente on encomenda.id_cliente = cliente.id where cliente.id=12"));

$arraycorreto = [$resposta_correta1, $resposta_correta2, $resposta_correta3, $resposta_correta4, $resposta_correta5, $resposta_correta6, $resposta_correta7, $resposta_correta8];
if (in_array($resposta_usuario, $arraycorreto)) {
Echo "<p style='color:green; text-align: center; font-weight:bold; font-family: verdana;'>Correto!</p>";
mysqli_query($con,"update usuario set pontos = pontos + 1 where iduser=$id");
header ("refresh: 1; url=arq13.php");
}

else{
Echo "<p style='color:red; text-align: center; font-weight:bold; font-family: verdana;'>Errado!</p>";
header ("refresh: 1; url=arq13.php");
}
}


?>