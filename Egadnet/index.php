<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='style.css'>	

    <title>Minhas atividades</title>

<head>

</head>
<body>
<header>
		<nav>
			<div class='logo'>
				<img src="egadnet-logo.png"></img>
			</div>
		</nav>
	</header>
<div class="titulo">
	<h1>Guilherme Pires Viana</h1>
</div>
<?php
for ($i = 1; $i <= 15; $i++) {
	echo "<div class='box'>
		<a href='Atividade$i/Ex$i.php'>Atividade $i</a>
	</div>";
}
?>
<div class='boxd'>
	<a href="Desafio/Desafio.php">DESAFIO</a>
</div>