<?php
include "conf.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$categoria = $_POST['categoria'];

if($conexion){
    $actualizar = "UPDATE producto SET nombre='$nombre', descripcion='$descripcion', 
    precio=$precio, stock=$stock, categoria_id=$categoria WHERE id='$id'";
    if(mysqli_query($conexion,$actualizar)){
        echo "Se actualizó exitosamente";
        header('Location: select.php');
    }else{
        echo "erro actualizando: ".mysqli_error($conexion);
    }

}else{
    echo "Error en la conexión ".mysqli_error($conexion);
}

?>