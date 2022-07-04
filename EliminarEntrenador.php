<?php
        $codigo = $_GET['cod'];

        include 'conexion.php';
        
        $consulta = "DELETE from entrenador where codigo = ?";
        $resultado = mysqli_prepare($conexion, $consulta);

        if(!$resultado){
            echo "Error al eliminar: ".mysqli_error($conexion);
        }

        $ok = mysqli_stmt_bind_param($resultado,"s", $codigo);
        $ok = mysqli_stmt_execute($resultado);

        if(!$ok){
            echo "Error al eliminar";
        }else{
            header('Location: ModificarEntrenador.php');
        }

        mysqli_close($conexion)
?>