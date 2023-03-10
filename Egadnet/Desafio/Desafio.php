<?php
    include('../header.php');
?>
<div class='exercicio'>
<h1>digite o CEP de sua cidade</h1>
<form method="post" action="resultado.php">
    <input type="text" name='cep' id='cep' required>
    <input type="submit" value="Pesquisar">
</form>
</div>