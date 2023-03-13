<?php
include('../header.php');

$livro = $_POST['livro'];
$tipo =  (isset($_POST['tipo']));


if (isset($_POST['tipo'])) {
    echo ("<div class='exercicio'> <table> <ul> <h2> O  " .$_POST['tipo']."  fez o empréstimo do livro ' $livro '");
} else {
    echo ("<script>alert('Não escolheu nenhum tipo');history.back();</script>");
}

?>