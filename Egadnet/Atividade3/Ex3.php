<?php
include('../header.php')
?>

<div class="exercicio">
<h1>EXERCICIO 3</h1>
     <form method='post' action='Re3.php'> <!--post de envio -->
         <label>Digite seu nome</label><br>
         <input type="text" name='name' id="name" required></input><br>
         <label>Digte sua idade</label><br>
         <input type="number" name='age' id='age'><br>

         <input type="submit" name='button' value="Snd"></input>
     </form>
</div>