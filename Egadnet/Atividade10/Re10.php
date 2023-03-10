<?php
$num = $_POST['num'];

for ($i = 0; $i <= 10; $i++) {
    $soma = $i * $num;
    echo "resultado: $num X $i = $soma <br>";
}
