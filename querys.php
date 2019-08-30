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
        case 'insertarDatos':
        if(isset($_REQUEST['accion']) && $_REQUEST['accion'] == 'insertarDatos') {
        $conexion=mysqli_connect('localhost','root','','pquinde');

        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];

        $sql="insert into cliente(id,nombre,apellido,direccion,telefono)
              values('$id','$nombre','$apellido','$direccion','$telefono')";
        echo mysqli_query($conexion,$sql);
    }
    case 'selectDatos':
    if(isset($_REQUEST['accion']) && $_REQUEST['accion'] == 'selectDatos') {
        $rst = $mysqli->query("select * from cliente");                
        while ($fila = $rst->fetch_assoc()) {
            echo '<tr>';
            echo '<td>';
            print ($fila['id']);
            echo '</td>';
            echo '<td>';
            print ($fila['nombre']);
            echo '</td>';
            echo '<td>';
            print ($fila['apellido']);
            echo '</td>';
            echo '<td>';
            print ($fila['direccion']);
            echo '</td>';
            echo '<td>';
            print ($fila['telefono']);
            echo '</td>';
            echo '</tr>';
        }
    }
}
?>