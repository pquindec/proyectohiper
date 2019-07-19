<?php
    require("conexion.php");
    switch ($_REQUEST['accion']){
        case 'cargarTipos':
            if(isset($_REQUEST['accion']) && $_REQUEST['accion'] == 'cargarTipos') {
                $sql = $mysqli->query("select * from vehiculos where categoria = '".$_POST['categoria']."'");
                $categorias = '';
                while ($row = $sql->fetch_assoc()) {
                    $categorias .= '<option value="'.$row['categoria'].'">'.$row['tipovehiculo'].'</option>';
                }
                echo($categorias);
            break;
                
        }

        case 'cargarCosto':
            if(isset($_REQUEST['accion']) && $_REQUEST['accion'] == 'cargarCosto') {
                $sql = $mysqli->query("select * from vehiculos where categoria = '".$_POST['categoria']."'");
                $categorias = '';
                while ($row = $sql->fetch_assoc()) {
                    $categorias .= '<option value="'.$row['categoria'].'">'.$row['costodia'].'</option>';
                }
                echo($categorias);
            break;
                
        }
    
        case 'cargarUsuario':
            if(isset($_REQUEST['accion']) && $_REQUEST['accion'] == 'cargarUsuario') {
                $sql = $mysqli->query("select * from cliente where id = '".$_POST['cedula']."'");
                $categorias = '';
                while ($row = $sql->fetch_assoc()) {
                    $categorias .= '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
                }
                echo($categorias);
            break;
                
        }
        
    }
?>