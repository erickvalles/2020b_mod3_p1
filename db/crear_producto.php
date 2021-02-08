<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    
?>
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Datos del producto</h2>
                <?php
                    if(isset($_SESSION['error'])){
                        echo '<div class="alert alert-danger" role="alert">
                        '.$_SESSION['error'].'
                      </div>';
                    }
                ?>
            </div>
            <div class="card-body">
                <form action="insert.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">

                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                    </div>
                    <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="text" class="form-control" id="precio" name="precio">
                    </div>
                    <div class="col-md-6">
                        <label for="stock" class="form-label">Stock:</label>
                        <input type="text" class="form-control" id="stock" name="stock">
                    </div>
                        
                        
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">categoria</label>
                        <select name="categoria" id="categoria">
                            <option value="1">Juguetes</option>
                            <option value="13">Categoría inexistente</option>
                            
                        </select>
                    </div>
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    </div>   
                    
                </form>
            </div>
        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>