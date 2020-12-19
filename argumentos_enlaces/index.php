<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces</title>
</head>
<body>
    <table border="2">
        <th>Nombre</th>
        <th>Enlace</th>

        <tr>
            <td>Erick</td>
            <td><a href="guardar.php?nombre=Erick">Ver detalles</a></td>
        </tr>
        <tr>
            <td>Jorge</td>
            <td><a href="guardar.php?nombre=Erick Jorge&precio=30000">Ver detalles</a></td>
        </tr>
        <tr>
            <td>Roberto Encriptado</td>
            <?php
                $valorNombre = base64_encode("Erick");
            ?>
            <td>
                <?php
                echo "<a href='guardar.php?nombre=$valorNombre'>Ver detalles</a>";
                ?>
            </td>
        </tr>
    </table>
</body>
</html>