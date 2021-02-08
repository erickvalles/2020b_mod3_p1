<?php
include "conf.php";
echo '<a href="crear_producto.php">Crear uno nuevo</a><br>';
if($conexion){
    $consulta = "SELECT * FROM producto";
    if($datos = mysqli_query($conexion,$consulta)){
        while($fila = mysqli_fetch_assoc($datos)){
            echo $fila["id"]." ".$fila["nombre"]
            ." ".$fila["descripcion"]
            ."<a href='delete.php?id=".$fila['id']."'>Eliminar</a>
            <a href='editar_producto.php?id=".$fila['id']."'>Editar</a><br>";
        }
    }else{
        echo "No funcionó la consulta: ".mysqli_error($conexion);
    }
}else{
    echo "No me pude conectar ".mysqli_error($conexion);
}

?>