<?php 
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imágenes/icon.png">
    <link rel="stylesheet" href="CSS/Formularios.css">
    <title>Registrar Equipo</title>
</head>
<body>
<main>
    <form action="AccionRegistrarEquipo.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre del equipo"><br>
    <select name="ent">
            <option value="">Elige un entrenador</option>
            <?php
            $sql2= "SELECT * from entrenador";
            $result2=mysqli_query($conexion,$sql2);
            while($mostrar2=mysqli_fetch_array($result2)){
                echo "<option value='".$mostrar2['codigo']."'>".$mostrar2['nombre']."</option>";
            }
            ?>
        </select><br>
        <select name="pkm">
            <option value="">Elige un Pokemon</option>
            <?php
            $sql3= "SELECT * from especie_pokemon";
            $result3=mysqli_query($conexion,$sql3);
            while($mostrar3=mysqli_fetch_array($result3)){
                echo "<option value='".$mostrar3['numero']."'>".$mostrar3['nombre_especie']."</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Ingresar Equipo"  id="submit">
    </form>
        </main>
</body>
</html>