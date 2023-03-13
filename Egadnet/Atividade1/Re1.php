<?php
include('../header.php');

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$soma = $num1 + $num2;
if ($soma > 20) {
    $soma += 8;
} else {
    $soma -= 5;
}
echo ("<div class='exercicio'> <table> <ul> <h2> resultado $soma </h2> <ul> <table>");
?>
