<?php
 include 'conexion.php';
 $nombre = $_POST['nombre'];

 $insert = "INSERT INTO  ciudad(nombre) VALUES (?)"; 
 $prepare = mysqli_prepare($conexion, $insert);   
    $ok = mysqli_stmt_bind_param($prepare,'s', $nombre);
    $ok = mysqli_stmt_execute($prepare);  
    echo '
     <script>
     alert("Ciudad Registrada");
     window.location = "ListadoCiudades.php";
     </script>
     ';
     exit;                                              
?> 