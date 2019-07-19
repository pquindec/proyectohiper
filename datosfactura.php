<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto</title>
        <link href="css/globalCSS.css" rel="stylesheet" type="text/css"/>
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
                            <li><a href="datosfactura.php">Lista de Factura</a></li>
                        </ul>
                    </li> 
                </ul>
            </nav>
        <div class="mt-Cuerpo">
        <?php
        echo '<h1>Lista Factura</h1>';
        require("conexion.php");
        $rst = $mysqli->query("select * from facturas");    
        echo '<table width="60%">';
        echo '<th>Numero Factura</th>';
        echo '<th>Dias Alquiler</th>';
        echo '<th>Costo por dia</th>';
        echo '<th>Descuento total</th>';
        echo '<th>Total de IVA</th>';
        echo '<th>Total a Pagar</th>';
        echo '<th>Fecha de Ingreso</th>';
        echo '<th>Tipo de Vehiculo</th>';
        echo '<th>Numero de Cedula</th>';
        echo '<th>Nombre de Cliente</th>';
        while ($fila = $rst->fetch_assoc()) {
            echo '<tr>';
            echo '<td>';
            print ($fila['id_factura']);
            echo '</td>';
            echo '<td>';
            print ($fila['dias_alquiler']);
            echo '</td>';
            echo '<td>';
            print ($fila['costo_dia']);
            echo '</td>';
            echo '<td>';
            print ($fila['total_descuento']);
            echo '</td>';
            echo '<td>';
            print ($fila['total_iva']);
            echo '</td>';
            echo '<td>';
            print ($fila['total_pagar']);
            echo '</td>';
            echo '<td>';
            print ($fila['fecha_ingreso']);
            echo '</td>';
            echo '<td>';
            print ($fila['fk_vehiculo']);
            echo '</td>';
            echo '<td>';
            print ($fila['fk_id']);
            echo '</td>';
            echo '<td>';
            print ($fila['fk_nombre']);
            echo '</td>';
            echo '</tr>';
        }
        ?>
        </div>
    </body>
</html>
