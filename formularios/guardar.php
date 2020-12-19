<?php
session_start();
if($_POST["codigo"]!="" && $_POST["nombre"]!=""){
    
    $attr["codigo"] = $_POST["codigo"];
    $attr["nombre"] = $_POST["nombre"];
    $attr["correo"] = $_POST["correo"];
    $attr["carrera"] = $_POST["carrera"];

    session_destroy();

    guardarDatos($attr);

}else{
    
    $_SESSION['error'] = "Nombre y código están vacíos";
    header('Location: index.php');
    
}



function guardarDatos($atributos){
    include("Alumno.php");
    $alumno = new Alumno($atributos);
    
    $alumno->guardar();
    $alumno->getCorreo();

    echo "nombre: ".$alumno->getNombre()."<br>";

    $alumno->setCorreo("erickg@valles.udg.mx");
    
    $alumno->getCorreo();
}


?>