<?php

include('../header.php');

    $chico = $_POST['alC'];
    $juca =$_POST['alJ'];

    $years=0;
    for($i=0; $juca <= $chico; $i++){
        $juca += 0.03;
        $chico += 0.02;
        $years += 1;
    }
   
echo ("<div class='exercicio'> <table> <ul> <h2>
Demorou $years anos para Juca ser maior que Chico </h2> <ul> <table>");
