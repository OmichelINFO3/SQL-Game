<html>
<head>
	<Title>Quiz!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1 id="titulo">Quiz MySQL</h1>
	<div id="geral">
		<h3 id="historia">Bem vindo ao quiz MySQL, responda a 10 perguntas sobre a linguagem MySQL e bote em prova seu conhecimento em banco de dados.</h3>
		<div id="form">
			<img src="banco.png" width="350" height="500">
			<form action="Arq1.php" method="POST">
				<input type="submit" name="envia" id="benvia" value="Jogar!">
				<input type="submit" name="encerra" value="Não, Obrigado" id="bencerra">
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


if (isset($_POST['encerra'])) {
Echo "<p style='color:red; text-align: center; font-weight:bold; font-family: verdana;'>Volte quando mudar de ideia!</p>";
header ("refresh: 1; url=arq1.php");
}

if (isset($_POST['envia'])) {
header ("location: arq2.php");
}
?>