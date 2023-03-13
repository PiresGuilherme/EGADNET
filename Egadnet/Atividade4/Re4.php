<?php
include('../header.php');

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

if ($n1 > $n2 && $n1 > $n3) {
    if ($n1 > $n3) {
        $result =  "Os números em ordem decrescente são " . $n1 . ", " . $n2 . " e ". $n3;
    } else {
        $result =  "Os números em ordem decrescente são " . $n1 . ", ". $n3 . " e ". $n2;
    }
} elseif ($n2 > $n3 && $n2 > $n1) {
    if ($n1 > $n3) {
        $result =  "Os números em ordem decrescente são " . $n2 . ", ". $n1 . " e ". $n3;
    } else {
        $result =  "Os números em ordem decrescente são " . $n2 . ", ". $n3 . " e ". $n1;
    }
} elseif ($n2 > $n1) {
    $result = "Os números em ordem decrescente são " . $n3 . ", ". $n2 . " e ". $n1;
} else {
    $result = "Os números em ordem decrescente são " . $n3 . ", ". $n1 . " e ". $n2;
}

echo ("<div class='exercicio'> <table> <ul> <h2> $result </h2> <ul> <table>");
?>