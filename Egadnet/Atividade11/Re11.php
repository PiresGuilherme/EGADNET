<?php
$word = $_POST['word'];
$times = $_POST['times'];

for ($i = 1; $i <= $times; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$word  ";
    }
    echo '<br>';
}
