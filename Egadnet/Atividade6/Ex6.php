<?php
include('../header.php')
?>

<div class="exercicio">
<h1>EXERCICIO 6</h1>
     <form method='post' action='Re6.php'>
         <label for="livro">Nome do livro</label><br>
         <input type="text" name='livro' id='livro' required><br>
         <label for='cargo'>Qual seu cargo<label>
         <p id='cargo'>
             <input type="radio" name="tipo" value="professor" />professor
             <input type="radio" name="tipo" value="aluno" /> aluno
         </p><br>
         <input type="submit" name='button' value='Send'>
     </form>
</div>