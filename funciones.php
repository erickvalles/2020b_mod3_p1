<?php


function calculaIMC($edad,$peso,$altura){
    $imc = $peso/($altura*$altura);

    $resultado = "";

    if($imc < 18.4){
        $resultado = "Insuficiente";
    }elseif($imc>18.5 && $imc < 24.9){
        $resultado = "Normal";
    }elseif($imc>25 && $imc < 29.9){
        $resultado = "Sobrepeso";
    }else{
        $resultado = "Obeso";
    }
    return $resultado;
}


/*
$resultadoJorge = calculaIMC(29,130,1.85);

$resultadoRoberto = calculaIMC(29,50,1.90);

echo "El resultado de Erick es: ".calculaIMC(29,100,1.85);;
echo $resultadoJorge;
echo $resultadoRoberto;*/



function login($user,$pass){
    $user = strtolower($user);//strtolower convierte a minúsculas
    if($user=="ericks" && $pass = "hola"){
        return true;
    }
        
    return false;    
}


if(login("ERICK","hola")){
    echo "bienvenido Erick";
}else{
    echo "No te conozco bro";
}


?>