<?php
        $cod = $_POST['cod'];
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $ciudad = $_POST['ciudad'];

        include 'conexion.php';
        
        $consulta = "UPDATE entrenador set nombre = ?, edad = ?, fk_ciudad = ? WHERE codigo = ?";
        $resultado = mysqli_prepare($conexion, $consulta);

        if(!$resultado){
            echo "Error al eliminar: ".mysqli_error($conexion);
        }

        $ok = mysqli_stmt_bind_param($resultado,"siss", $nombre, $edad, $ciudad, $cod);
        $ok = mysqli_stmt_execute($resultado);

        if(!$ok){
            echo "Error al modificar";
        }else{
            header('Location: ModificarEntrenador.php');
        }

        mysqli_close($conexion)
        

        
        

    
    ?>