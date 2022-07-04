<?php
 include 'conexion.php';
 $nombre = $_POST['nombre'];
 $ent = $_POST['ent'];
 $pkm = $_POST['pkm'];

 $insert = "INSERT INTO pokemon(nombre, fk_entrenador, fk_especie) VALUES (?, ?, ?)"; 
 $prepare = mysqli_prepare($conexion, $insert);   
    $ok = mysqli_stmt_bind_param($prepare,'sss', $nombre, $ent, $pkm);
    $ok = mysqli_stmt_execute($prepare);  
    echo '
     <script>
     alert("Equipo Registrado");
     window.location = "RegistrarEquipo.php";
     </script>
     ';
     exit;                                              
?> 