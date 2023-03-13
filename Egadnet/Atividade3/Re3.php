<?php
include('../header.php');

$name = $_POST['name'];
$age = $_POST['age'];

if ($age < 50) {
    $result = 'a idade de ' . $name . ' é menor do que 50';
} else {
    $result = 'a idade de ' . $name . ' é maior ou igual a 50';
}

echo ("<div class='exercicio'> <table> <ul> <h2> $result </h2> <ul> <table>");
?>