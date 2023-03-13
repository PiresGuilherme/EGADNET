<?php
include('../header.php');

$numbers = array();
$numbers['n1'] = $_POST['n1'];
$numbers['n2'] = $_POST['n2'];
$numbers['n3'] = $_POST['n3'];
$numbers['n4'] = $_POST['n4'];
$numbers['n5'] = $_POST['n5'];
$par = array();
$media = 0;
foreach ($numbers as $key => $value) {
    if ($value % 2 == 0) {
        $par[] = $value;
    }
    $media += $value;
}
$media /= 5;
echo ("<div class='exercicio'> <table> <ul> <h2>
A soma de todos os valores é: $media <br>
A média dos números inseridos é: $media <br>
Os números pares são: 
"); 
foreach ($par as $value) {
    echo $value . " ";
}
 echo ("</h2> <ul> <table>");
