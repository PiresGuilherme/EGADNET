<?php
include('../header.php');

$num = $_POST['num'];

for ($i = 0; $i <= 10; $i++) {
    $soma = $i * $num;
    echo ("<div class='exercicio'> <table> <ul> <h2> 
    resultado: $num X $i = $soma <br>
     </h2> <ul> <table>");
}
?>