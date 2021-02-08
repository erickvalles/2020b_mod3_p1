<?php
include "conf.php";
$id = $_GET['id']; 

if($conexion){
    $delete = "DELETE FROM producto where id='$id'";
    if(mysqli_query($conexion,$delete)){
        echo "Se borró con éxito";
        header('Location: select.php');
    }else{
        echo "No se pudo borrar: ".mysqli_error($conexion);
    }
}else{
    echo "Error en la conexión: ".mysqli_error($conexion);
}


?>