<?php
$mod = $_POST['n1'];
if ($mod % 10 == 0) {
    echo 'é divisivel por 10';
} elseif ($mod % 5 == 0) {
    echo 'é divisivel por 5';
} elseif ($mod % 2 == 0) {
    echo 'é divisivel por 2';
} else {
    echo $mod + 'não é divisível por 2, 5 ou 10';
};
