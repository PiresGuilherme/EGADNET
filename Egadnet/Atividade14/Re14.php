<?php
$numbers = array();
$numbers['n1'] = $_POST['n1'];
$numbers['n2'] = $_POST['n2'];
$numbers['n3'] = $_POST['n3'];
$numbers['n4'] = $_POST['n4'];
$numbers['n5'] = $_POST['n5'];

$numbers2 = array();
$numbers2['n1'] = $_POST['n6'];
$numbers2['n7'] = $_POST['n7'];
$numbers2['n8'] = $_POST['n8'];
$numbers2['n9'] = $_POST['n9'];
$numbers2['n10'] = $_POST['n10'];
var_dump($numbers);
var_dump($numbers2);
$intr =   array_intersect($numbers, $numbers2);
echo "a intersecção seria ";
foreach ($intr as $value){
    echo $value . " ";}
    var_dump($intr);
