<?php
include('../header.php');

$num = $_POST['num'];
echo ("<div class='exercicio'> <table> <ul> <h2> ");
for ($i = 1; $i <= $num; $i++) {
    echo $i . ", ";
}
echo ("</h2> <ul> <table>");
?>