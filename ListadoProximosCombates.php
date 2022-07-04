<?php 
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listado combates</title>
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
    <header> <h1>LISTA DE PROXIMOS COMBATES</h1></header> 
    <div>
    <div class="tabla_rkn">
    <table border="1">
        <tr>
            <td>Fecha del combate</td>
            <td>Ciudad</td>
            <td>Entrenador 1</td>
            <td>Entrenador 2</td>
        </tr>
    <?php 
        $sql="SELECT * from encuentro";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){
                ?>    
        <tr>
        <td><?php echo $mostrar['fecha']?></td>
        <?php
        $sql2="SELECT * from ciudad WHERE codigo=$mostrar[fk_ciudad]";
        $result2=mysqli_query($conexion,$sql2);
        while($mostrar2=mysqli_fetch_array($result2)){
        ?>
         <td><?php echo $mostrar2['nombre']?></td>
         <?php } ?>
        <?php
        $sql3="SELECT * from entrenador WHERE codigo=$mostrar[fk_entrenador1]";
        $result3=mysqli_query($conexion,$sql3);
        while($mostrar3=mysqli_fetch_array($result3)){
        ?>
        <td><?php echo $mostrar3['nombre']?></td>
       <?php } ?>
       <?php
        $sql4="SELECT * from entrenador WHERE codigo=$mostrar[fk_entrenador2]";
        $result4=mysqli_query($conexion,$sql4);
        while($mostrar4=mysqli_fetch_array($result4)){
        ?>
        <td><?php echo $mostrar4['nombre']?></td>
        <?php } ?>
         </tr>
    <?php
        }
    ?>
    </table>
    </div>
    </div><br>
    <button class="button1">
        <a href="MenuDuelos.php">Regresar</a>
    </button>
    </main>
</body>
</html>