<?php
    $chico = $_POST['alC'];
    $juca =$_POST['alJ'];

    $years=0;
    for($i=0; $juca <= $chico; $i++){
        $juca += 0.03;
        $chico += 0.02;
        $years += 1;
    }
    var_dump($years);
    echo "demorou $years anos "

?>