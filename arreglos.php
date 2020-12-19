<?php

    //                 0,  1, 2, 3,  4
    $calificaciones = [100,90,30,50,100];
    //posicionales
    //ultima = tam -1

    //print_r($calificaciones);

    $calificacionesMaterias = ["historia"=>100,"Mate"=>90, "E.F."=>30];


    //print_r($calificacionesMaterias);


    echo "Tuve $calificaciones[0] en historia";

    echo "además, tuve ".$calificacionesMaterias["Mate"]." en matemáticas";


?>