<?php

    $radio = 10;
    $area = M_PI*pow($radio,2);

    define("CIUDAD","Ameca");

   // echo $z;

    $base = 10;
    $altura = 20;

    $areaTriangulo = ($base*$altura)/2;

    //nombre, apellido, edad, peso y altura, imc

    $nombre = "Erick";
    $apellido = "Guerrero";

    $edad = 44;
    $peso = 150;
    $altura = 1.65;

    $imc = $peso/($altura*$altura);

    //pow($altura,2);


    

    $mensaje = "La altura es $altura, tu 'edad' es $edad, eres de ".CIUDAD;

    //$mensaje = 'La altura es '.$altura.', tu "edad" es '.$edad;

    echo $mensaje;






?>