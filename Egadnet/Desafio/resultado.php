<?php
include('../header.php');

// Recebe a requisição POST com o CEP como parâmetro
$cep = $_POST['cep'];

// Testa se existe um cookie CEP e se o mesmo é igual ao que foi inserido na requisição
if (isset($_COOKIE['cep']) && $_COOKIE['cep'] == $cep) {
    $response = explode(',', $_COOKIE['response']);
    echo ("<div class='exercicio'> <table>  <h2>  Dado requisitado no COOKIE <br><ul>");
    for ($i = 0; $i < 10; $i++) {
        print_r("<h3> " . $response[$i] . "</h3> ");
    }
} else {
    //Cria o Cookie para armazenar o CEP
    setcookie('cep', $cep,  time(300)); //expira em 5 minutos

    //Testa se todos os 8 parametros foram recebidos
    if (strlen($cep) == 8) {

        // Define a URL da API ViaCEP
        $url = "viacep.com.br/ws/$cep/json/";

        // Inicia uma instância do cURL
        $ch = curl_init();

        // Configura as opções do cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Faz a requisição e obtém a resposta
        $response = curl_exec($ch);

        // Fecha a instância do cURL
        curl_close($ch);

        // Define o cookie com o resultado da pesquisa
        setcookie('response', $response,time(300));//expira em 5 minutos


        // Divide a resposta da API ViaCEP
        $response = explode(",", $response);

        // Testa se foi encontrado o CEP
        if (count($response) == 10) {
            // Exibe os dados em forma de tabela
            echo ("<div class='exercicio'> <table>  <h2>  Dado requisitado no VIACEP <br><ul>");
            for ($i = 0; $i < 10; $i++) {
                print_r("<h3> " . $response[$i] . "</h3> ");
            }
            echo (" </ul></table> </div>");
        } else {
            // Retorna à página anterior caso não tenha encontrado o CEP
            echo "<script>alert('o $cep não foi encontrado, por favor verifique o número!');history.back()</script>";
        }
    } else {
        // Retorna erro referente a quantidade de caracteres do CEP
        echo "<script>alert('O CEP $cep precisa ter 8 caracteres, por favor verifique o número!');history.back()</script>";
    }
};
