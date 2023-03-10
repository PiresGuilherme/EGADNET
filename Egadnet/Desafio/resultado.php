<?php
session_start();
// Recebe a requisição POST com o CEP como parâmetro
$cep = $_POST['cep'];

if (strlen($cep) == 8) {
    // Define a URL da API ViaCEP
    $url = "viacep.com.br/ws/$cep/json/";

    // Cria uma instância do cURL para fazer a requisição
    $ch = curl_init();

    // Configura as opções do cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Faz a requisição e obtém a resposta
    $response = curl_exec($ch);

    // Fecha a instância do cURL
    curl_close($ch);

    // Divide a resposta da API ViaCEP
    $response = explode(",", $response);

    // testa se foi encontrado o CEP
    if (count($response) == 10) {
        // Exibe os dados em forma de tabela
        for ($i = 0; $i < 10; $i++) {
            echo ("<table> <ul>$response[$i]<ul> <table>");
        }
    } else {
        echo "<script>alert('o $cep não foi encontrado, por vavor verifique o numero!');history.back()</script>";
    }
} else {
    echo "<script>alert('O CEP $cep precisa ter 8 caracteres, por favor verifique o numero!');history.back()</script>";
}
