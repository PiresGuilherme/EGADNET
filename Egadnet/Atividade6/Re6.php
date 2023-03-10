<?php

$livro = $_POST['livro'];
$tipo =  (isset($_POST['tipo']));


if (isset($_POST['tipo'])) {
    var_dump("escolheu " . $_POST['tipo']);
} else {
    var_dump("não escolheu nenhuma banda de rock");
}
echo "O " . $_POST['tipo'] . " fez o emprestimo do livro ' " . $livro . " '";
