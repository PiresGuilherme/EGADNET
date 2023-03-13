<?php
include('../header.php');

$word = $_POST['word'];
$times = $_POST['times'];
echo ("<div class='exercicio'> <table> <ul> <h2>"); 
for ($i = 1; $i <= $times; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$word  ";
    }
    echo '<br>';
}
echo (" </h2> <ul> <table>");
?>