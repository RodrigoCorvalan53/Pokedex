<?php 
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Listado Pokémon</title>
    <link rel="icon" href="Imágenes/icon.png">
    <link rel="stylesheet" href="CSS/Listas.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <header> <h1>POKEDEX</h1></header> 
    <div>
    <div class="tabla_rkn">
    <table border="1">
        <tr>
            <td>Icono</td>
            <td>Número Pokemon</td>
            <td>Nombre Pokemon</td>
            <td>Descripción</td>
            <td>Tipo</td>
        </tr>
        <?php 
         $sql="SELECT * from especie_pokemon ORDER BY `numero` ASC";
         $result=mysqli_query($conexion,$sql);
         while($mostrar=mysqli_fetch_array($result)){
            ?>    
        <tr>
        <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['foto']); ?>"/></td>
        <td><?php echo $mostrar ['numero']?></td>
        <td><?php echo $mostrar ['nombre_especie']?></td>
        <td><?php echo $mostrar ['descripcion']?></td>
        <td><?php echo $mostrar ['tipo']?></td>
         </tr>
    <?php
        }
    ?>
    </table>
    </div>
    </div><br>
    <button class="button1">
        <a href="MenuPokemon.php">Regresar</a>
    </button>
    </main>
    
</body>
</html>