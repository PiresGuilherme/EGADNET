<?php
include('../header.php')
?>

<div class="exercicio">
<h1>EXERCICIO 11</h1>
     <form method='post' action='Re11.php'>
         <label for='times'>Digite um número de vezes para repetir a palavra</label><br>
         <input type="number" name="times" id="times" required><br>
         <label for="word">Qual palavra será repetida</label><br>
         <input type="text" name='word' id="word"><br>
         <input type="submit" name='button' value="Send">
     </form>
</div>