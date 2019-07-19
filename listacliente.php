<html>
<head>
        <meta charset="UTF-8">
        <title>Proyecto</title>
        <link href="css/globalCSS.css" rel="stylesheet" style type="text/css">
    </head>
    <body>   
    <?php 
        include("header.php");?> 
    <nav class="navegacion">
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Cliente</a>
                        <ul class="submenu">
                            <li><a href="cliente.php">Registro de Clientes</a></li>
                            <li><a href="listacliente.php">Listado de Clientes</a></li>
                        </ul>
                    </li>  
                    <li><a href="#">Alquiler de Vehiculos</a>
                        <ul class="submenu">
                            <li><a href="factura.php">Proforma de Calculo</a></li>
                            <li><a href="datosfactura.php">Listado de Factura</a></li>
                        </ul>
                    </li>   
                </ul>
            </nav>
            <div class="mt-Cuerpo"><br><br>
        <?php
        echo"<marquee direction=''><img src='imagenes/images'/ width='300' align='left'></marquee>";
        echo '<h1>Listado de Cliente</h1>';
        require("conexion.php");      
        $rst = $mysqli->query("select * from cliente");                
        echo '<table align="center" border="4" width="60%">';
        echo '<th>Cedula</th>';
        echo '<th>Nombre</th>';
        echo '<th>Apellido</th>';
        echo '<th>Direccion</th>';
        echo '<th>Telefono</th>';
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
        ?>
        </div>
    </body>
</html>