<?php

    $edad = 30;

    //$nombre = "Erick";

    if($edad>18){
        echo "Bienvenido <br/>";
    }elseif($edad >12){
        echo "Hola, puberto <br>";
    }else{
        echo "Vete de aquí, niño <br>";
    }

    if(isset($nombre)){
        echo "Hola $nombre <br>";
    }else{
        echo "Bienvenido invitado <br>";
    }




    $nombre = "Erick";
    $apellido = "Guerrero";

    $edad = 44;
    $peso = 150;
    $altura = 1.65;

    $imc = $peso/($altura*$altura);

    $resultado = "";

    if($imc < 18.4){
        $resultado = "Insuficiente";
    }elseif($imc>18.5 && $imc < 24.9){
        $resultado = "Normal";
    }elseif($imc>25 && $imc < 29.9){
        //sobrepeso
    }else{
        //obeso
    }

    $pais = "Canadá";
    
    switch($pais){
        case "EE.UU":
            $peliculas = ["Avengers","Batman","Bob Esponja", "Joker"];
        break;
        case "India":
            $peliculas = ["Psycho Raman", "LAGAAN","hermanos para siembre"];
        break;
        case "México":
            $peliculas = ["La risa en vacaciones","La risa en vacaciones 2", "La risa en vacaciones 3: La venganza"];
            break;
        default:
            $peliculas = ["Titanic", "Mi pobre angelito"];
        break;
    }


    echo "Las películas disponibles en $pais son: <br>";
    print_r($peliculas);

    
//En vez de switch (equivalente)
if($pais == "México"){

}elseif($pais == "EE.UU"){

}elseif($pais == "INDIA"){

}else{

}





?>