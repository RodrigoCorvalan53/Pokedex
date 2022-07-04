<?php 
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listado ciudades</title>
    <link rel="icon" href="Imágenes/icon.png">
    <link rel="stylesheet" href="CSS/Ranking.css" >
    <link rel="stylesheet" href="CSS/Listas.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <header> <h1>LISTA DE CIUDADES</h1></header> 
    <div>
    <div class="tabla_rkn">
    <table border="1">
        <tr>
            <td>Número ciudad</td>
            <td>Nombre ciudad</td>
        </tr>
        <?php 
         $sql="SELECT * from ciudad ORDER BY `codigo` ASC";
         $result=mysqli_query($conexion,$sql);
         while($mostrar=mysqli_fetch_array($result)){
            ?>    
        <tr>
        <td><?php echo $mostrar ['codigo']?></td>
        <td><?php echo $mostrar ['nombre']?></td>
         </tr>
    <?php
        }
    ?>
    </table>
    </div>
    </div><br>
    <button class="button1">
        <a href="MenuCiudad.php">Regresar</a>
    </button>
    </main>
    
</body>
</html>