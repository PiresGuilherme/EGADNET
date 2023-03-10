<?php
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
echo "a soma de todos os valores é $media <br>";
$media /= 5;
echo "a média dos números inseridos é $media <br>";
echo "Os numeros pares sao: ";
foreach ($par as $value) {
    echo $value . " ";
}
