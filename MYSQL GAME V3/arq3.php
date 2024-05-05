<html>
<head>
	<Title>Quiz!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<h1 id="titulo">Quiz MySQL</h1>
	<div id="questoes">
		<h2>Questão 1<h2>
		<h3>Busque na tabela cidade, o nome da cidade de ID 5.</h3><br>
		<h4>Nome da tabela: Cidade</h4><br>
		<h4>Atributos: Nome, Id, Estado</h4>
	</div>
	<div id="form">
		<form action="Arq3.php" method="POST">
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

if($r == "select nome from cidade where id=5"){
Echo "<p style='color:green; text-align: center; font-weight:bold; font-family: verdana;'>Correto!</p>";
mysqli_query($con,"update usuario set pontos = pontos + 1 where iduser=$id");
header ("refresh: 1; url=arq4.php");
}

elseif($r == "select * from cidade where id=5"){
echo "	<table style='font-family: verdana;
text-align: center;
border: solid black 2px;
border-radius: 20px;
padding: 20px;
background-color: #ccffe6;
margin: auto;
width: 50%;
color: #e63900;'>
  <tr>
    <th style='border: 5px solid;'>ID</th>
    <th style='border: 5px solid;'>Nome</th>
    <th style='border: 5px solid;'>Estado</th>
  </tr>
  <tr style='border: 5px solid;'>
    <td style='border: 5px solid; border-radius: 20px;'>24</td>
    <td style='border: 5px solid; border-radius: 20px;'>Rosário</td>
    <td style='border: 5px solid; border-radius: 20px;'>RS</td>
  </tr>";
}elseif($r == "select * from cidade"){
echo "	<table style='font-family: verdana;
text-align: center;
border: solid black 2px;
border-radius: 20px;
padding: 20px;
background-color: #ccffe6;
margin: auto;
width: 50%;
color: #e63900;'>
  <tr>
    <th style='border: 5px solid;'>ID</th>
    <th style='border: 5px solid;'>Nome</th>
    <th style='border: 5px solid;'>Estado</th>
  </tr>
  <tr style='border: 5px solid;'>
    <td style='border: 5px solid; border-radius: 20px;'>1</td>
    <td style='border: 5px solid; border-radius: 20px;'>Salvador</td>
    <td style='border: 5px solid; border-radius: 20px;'>BH</td>
  </tr>
  <tr style='border: 5px solid;'>
    <td style='border: 5px solid; border-radius: 20px;'>2</td>
    <td style='border: 5px solid; border-radius: 20px;'>São Paulo</td>
    <td style='border: 5px solid; border-radius: 20px;'>SP</td>
  </tr>
  <tr style='border: 5px solid;'>
    <td style='border: 5px solid; border-radius: 20px;'>3</td>
    <td style='border: 5px solid; border-radius: 20px;'>Porto Alegre</td>
    <td style='border: 5px solid; border-radius: 20px;'>RS</td>
  </tr>
   <tr style='border: 5px solid;'>
    <td style='border: 5px solid; border-radius: 20px;'>4</td>
    <td style='border: 5px solid; border-radius: 20px;'>Manaus</td>
    <td style='border: 5px solid; border-radius: 20px;'>AM</td>
  </tr>
   <tr style='border: 5px solid;'>
    <td style='border: 5px solid; border-radius: 20px;'>5</td>
    <td style='border: 5px solid; border-radius: 20px;'>Rio De Janeiro</td>
    <td style='border: 5px solid; border-radius: 20px;'>RJ</td>
  </tr>";
}

else{
Echo "<p style='color:red; text-align: center; font-weight:bold; font-family: verdana;'>Errado!</p>";
header ("refresh: 1; url=arq4.php");
}
}


?>
