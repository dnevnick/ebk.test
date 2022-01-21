<?php

include 'Test.php';
$myCases = include 'data\MyCases.php';
$juriyCases = include 'data\JuriyCases.php';

    $myCasesTest = new Test($myCases);
    if($myCasesTest->run()) {
        echo("Мои тесты прошли успешно\n");
    }
    else{
        echo("Мои тесты не прошли\n");
    }

    $juriyCasesTest = new Test($juriyCases);
    if($juriyCasesTest->run()) {
        echo("Тесты Юрия прошли успешно\n");
    }
    else{
        echo("Тесты Юрия не прошли\n");
    }



