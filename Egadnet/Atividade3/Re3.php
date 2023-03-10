<?php
$name = $_POST['name'];
$age = $_POST['age'];

if ($age < 50) {
    echo 'a idade de ' . $name . ' é menor do que 50';
} else {
    echo 'a idade de ' . $name . ' é maior ou igual a 50';
}
