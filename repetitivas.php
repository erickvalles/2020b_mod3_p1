<?php
/*
$intentos = 0;

while($intentos<=40){
        //se va a repetir mientras la condición se cumpla
        echo "No has intentado lo suficiente $intentos<br> ";
        $intentos++;
}
echo "ya terminé while";
$intentos_do=0;
do{
    //se va a repetir mientras la condición se cumpla
    echo "No has intentado lo suficiente $intentos_do<br> ";
    $intentos_do++;
}while($intentos_do<=40);
echo "ya terminé do-while";*/

//¿desde dónde?  ¿mientras qué..?  ¿cómo cambia la variable?
for($contador=0;$contador<=100;$contador++){
    echo "No usaré referencias a los Simpsons para dar clases.<br>";
}

for($contador=0;$contador<=100;$contador++){
   if($contador%2!=0){
       echo "la variable es impar<br>";
   }
}







?>