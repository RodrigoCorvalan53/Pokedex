<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Entrenador</title>
    <link href="CSS/Formularios.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="Imágenes/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <main>
    <div>
    <?php

        $codigo = $_GET['cod'];

        include 'conexion.php';

        $consulta = "SELECT * FROM entrenador where codigo = '".$codigo."'";
        $resultado = mysqli_query($conexion, $consulta);   
        while($mostrar=mysqli_fetch_array($resultado)){
    ?> 
    <div class="mod">
    <form class="inputs" action="AccionModificarEntrenador.php" method="POST">
    <input type="text" class="input" value="<?php echo $mostrar ['codigo']?>" disabled>
    <input type="hidden" class="input" value="<?php echo $mostrar ['codigo']?>"  name="cod"><br>
    <input type="text" class="input" value="<?php echo $mostrar ['nombre']?>" name="nombre"><br>
    <input type="number" class="input" value="<?php echo $mostrar ['edad']?>" name="edad"><br>
    <select name="ciudad">
        <option value="">Elige una nueva Ciudad</option>
            <?php
            $sql= "SELECT * from ciudad";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
                echo "<option value='".$mostrar['codigo']."'>".$mostrar['nombre']."</option>";
            }
            ?>
        </select><br>
    <input type="submit" class="btn" value="Actualizar" id="submit">
    <?php } ?></form>
    </div>
</main><br>
<button id="submit2">
        <a href="MenuEntrenador.php">Regresar</a>
</button>
</body>
</html>