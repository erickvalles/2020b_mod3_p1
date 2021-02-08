<?php
include "conf.php";

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$categoria = $_POST['categoria'];
session_start();
if($conexion){
    $consulta = "INSERT INTO producto 
    (nombre, descripcion, precio, stock, categoria_id)
    VALUES ('$nombre','$descripcion',$precio,$stock,$categoria)";
    if(mysqli_query($conexion,$consulta)){
        echo "Se insertó exitosamente";
        session_destroy();
    }else{
        $_SESSION['error'] = mysqli_error($conexion);
        header('Location: crear_producto.php');
        
    }
}else{
    echo "Error al conectarme".mysqli_error($conexion);
}


?>