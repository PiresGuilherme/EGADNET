<?php
include('../header.php')
?>

<div class="exercicio">
<h1>EXERCICIO 1</h1>
<form method='post' action='Re1.php'> <!--post de envio -->
    <h2>Digite o primeiro número</h2>
    <input type="number" name='num1' id="num1" required></input>
    <h2>Digite o segundo número</h2>
    <input type="number" name='num2' id="num2" required></input>
    <br><br>
    <input type="submit" name='button' value="Send"></input>
</form>
</div>