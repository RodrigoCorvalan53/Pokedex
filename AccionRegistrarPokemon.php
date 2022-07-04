<?php
 include 'conexion.php';
 $pkmn = $_POST['pkmn'];
 $numero = $_POST['numero'];
 $tipo = $_POST['tipo'];
 $desc = $_POST['descripcion'];
 $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

 $insert = "INSERT INTO especie_pokemon(nombre_especie, numero, tipo, descripcion, foto) VALUES (?, ?, ?, ?, '$foto')"; 
 $prepare = mysqli_prepare($conexion, $insert);   
    $ok = mysqli_stmt_bind_param($prepare,'ssss', $pkmn, $numero, $tipo, $desc);
    $ok = mysqli_stmt_execute($prepare);  
    echo '
     <script>
     alert("Pokemon Registrado");
     window.location = "ListadoPokemon.php";
     </script>
     ';
     exit;                                              
?> 