<?php
include('../header.php');

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

$intr =   array_intersect($numbers, $numbers2);
echo ("<div class='exercicio'> <table> <ul> <h2>");
if(count($intr) >0){
echo "A intersecção são os números : ";
foreach ($intr as $value){
    echo $value . " ";}
} else {
    echo "Não há intersecção nos números citados";
}
echo ("</h2> <ul> <table>")
?>