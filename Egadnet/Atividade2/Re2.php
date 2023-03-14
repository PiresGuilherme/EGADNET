<?php
include('../header.php');
$result = "";
$mod = $_POST['n1'];
if ($mod % 10 == 0) {
    $result =  'É divisivel por 10';
} elseif ($mod % 5 == 0) {
    $result = 'É divisivel por 5';
} elseif ($mod % 2 == 0) {
    $result = 'É divisivel por 2';
} else {
    $result = "$mod não é divisível por 2, 5 ou 10";
    
};
echo ("<div class='exercicio'> <table> <ul> <h2> $result </h2> <ul> <table>");
?>