<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/Listas.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="Imágenes/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <title>Listado Entrenador</title>
</head>
<body>
<header>
<h1>LISTADO DE ENTRENADORES</h1>
</header>
<main>
<div>
<div class="tabla_rkn">
<table border="1">
<tr>
    <td>Entrenador</td>
    <td>Edad</td>
    <td>Editar</td>
    <td>Eliminar</td>
</tr>
<?php
include 'conexion.php';

$consulta = "SELECT * FROM entrenador";
$resultado = mysqli_query($conexion, $consulta);

while($fila = mysqli_fetch_row($resultado)){
    echo "<tr><td>";
    echo $fila[1]." </td><td>";
    echo $fila[2]." </td><td>";
    echo "<a href='FormularioModificarEntrenador.php?cod=".$fila['0']."'>Editar</a></td><td>";
    echo "<a href='EliminarEntrenador.php?cod=".$fila['0']."'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";

?>
</div>
</div><br>
<button class="button1">
        <a href="MenuEntrenador.php">Regresar</a>
    </button>
</main>
</body>
</html>