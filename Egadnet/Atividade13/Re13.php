<?php
include('../header.php');

$numbers = array();
$numbers['n1'] = $_POST['n1'];
$numbers['n2'] = $_POST['n2'];
$numbers['n3'] = $_POST['n3'];
$numbers['n4'] = $_POST['n4'];
$numbers['n5'] = $_POST['n5'];
$maior = 0;
$menor = 99999;
$media = 0;
foreach ($numbers as $key => $value) {
    if ($value > $maior) {
        $maior += $value;
    }
    if ($value < $menor) {
        $menor = $value;
    }
    $media += $value / 5;
};
echo ("<div class='exercicio'> <table> <ul> <h2>
O maior número é $maior e o menor é $menor <br> A média é $media </h2> <ul> <table>");

