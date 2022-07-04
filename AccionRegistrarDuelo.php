<?php
 include 'conexion.php';
 $fecha = $_POST['fecha'];
 $ciudad = $_POST['ciudad'];
 $ent1 = $_POST['ent1'];
 $ent2 = $_POST['ent2'];

 $insert = "INSERT INTO encuentro(fecha, fk_ciudad, fk_entrenador1, fk_entrenador2) VALUES (?, ?, ?, ?)"; 
 $prepare = mysqli_prepare($conexion, $insert);   
    $ok = mysqli_stmt_bind_param($prepare,'ssss',$fecha, $ciudad, $ent1, $ent2);
    $ok = mysqli_stmt_execute($prepare); 
    echo '
     <script>
     alert("Duelo Registrado");
     window.location = "ListadoProximosCombates.php";
     </script>
     ';
     exit;                                              
?> 