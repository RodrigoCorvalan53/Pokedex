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
    <title>Registrar Duelo</title>
</head>
<body>
<main>
    <form action="AccionRegistrarDuelo.php" method="POST">
        <input type="date" name="fecha"><br>
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
        <select name="ent1">
            <option value="">Elige un entrenador</option>
            <?php
            $sql2= "SELECT * from entrenador";
            $result2=mysqli_query($conexion,$sql2);
            while($mostrar2=mysqli_fetch_array($result2)){
                echo "<option value='".$mostrar2['codigo']."'>".$mostrar2['nombre']."</option>";
            }
            ?>
        </select><br>
        <select name="ent2">
            <option value="">Elige un entrenador</option>
            <?php
            $sql3= "SELECT * from entrenador";
            $result3=mysqli_query($conexion,$sql3);
            while($mostrar3=mysqli_fetch_array($result3)){
                echo "<option value='".$mostrar3['codigo']."'>".$mostrar3['nombre']."</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Ingresar Duelo"  id="submit">
    </form>
</main>
</body>
</html>