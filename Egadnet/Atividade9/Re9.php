<?php
include('../header.php');

$numbers = array();
$numbers['n1'] = $_POST['n1'];
$numbers['n2'] = $_POST['n2'];
$numbers['n3'] = $_POST['n3'];
$numbers['n4'] = $_POST['n4'];
$numbers['n5'] = $_POST['n5'];
$positivo = 0;
$negativo = 0;
foreach ($numbers as $key => $value) {
    if ($value >= 0) {
        $positivo += $value;
    } else {
        $negativo += 1;
    };
}
echo ("<div class='exercicio'> <table> <ul> <h2> 
A soma dos números positivos é: $positivo <br>
Há $negativo números negativos
 </h2> <ul> <table>");
?>