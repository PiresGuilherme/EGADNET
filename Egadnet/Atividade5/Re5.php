<?php
include('../header.php');

$month = $_POST['month'];
switch ($month) {
    case 1:
        $result = "Janeiro";
        break;
    case 2:
        $result = "Fevereiro";
        break;
    case 3:
        $result = "Março";
        break;
    case 4:
        $result = "Abril";
        break;
    case 5:
        $result = "Maio";
        break;
    case 6:
        $result = "Junho";
        break;
    case 7:
        $result = "Julho";
        break;
    case 8:
        $result = "Agosto";
        break;
    case 9:
        $result = "Setembro";
        break;
    case 10:
        $result = "Outubro";
        break;
    case 11:
        $result = "Novembro";
        break;
    case 12:
        $result = "Dezembro";
        break;
    default:
    $result = "NÃO EXISTE ESTE MÊS";
        break;
}

echo ("<div class='exercicio'> <table> <ul> <h2> $result </h2> <ul> <table>");
?>