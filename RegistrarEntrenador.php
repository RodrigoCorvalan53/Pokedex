<?php 
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Formularios.css">
    <title>Ingresar entrenador</title>
</head>
<body>
    <main>
    <form action="AccionRegistrarEntrenador.php" method="POST">
        <input class="input" type="text" placeholder="Nombre entrenador" name="nombre" required><br>
        <input class="input" type="text" placeholder="Edad" name="edad" required><br>
        <select name="ciudad">
        <option value="">Elige una ciudad</option>
            <?php
            $sql= "SELECT * from ciudad";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
                echo "<option value='".$mostrar['codigo']."'>".$mostrar['nombre']."</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Ingresar entrenador" id="submit">
    </form>
    </main>
</body>
</html>