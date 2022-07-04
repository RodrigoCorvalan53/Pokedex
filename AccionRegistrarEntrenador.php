<?php
 include 'conexion.php';
 $nombre = $_POST['nombre'];
 $edad = $_POST['edad'];
 $ciudad = $_POST['ciudad'];

 $insert = "INSERT INTO entrenador(nombre, edad, fk_ciudad) VALUES (?, ?, ?)"; 
 $prepare = mysqli_prepare($conexion, $insert);   
    $ok = mysqli_stmt_bind_param($prepare,'sss', $nombre, $edad, $ciudad);
    $ok = mysqli_stmt_execute($prepare); 
    echo '
     <script>
     alert("Entrenador Registrado");
     window.location = "RegistrarEntrenador.php";
     </script>
     ';
     exit;                
                         
?> 