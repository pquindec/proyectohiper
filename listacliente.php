<html>
<head>
        <meta charset="UTF-8">
        <title>Proyecto</title>
        <link href="css/globalCSS.css" rel="stylesheet" style type="text/css">
        <script src="jquery-3.2.1.min.js"></script>
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
            <div id="consultar">
                <section class="widget">
                    <h4 class="widgettitulo">Lista de Clientes</h4>
                    <div class="consul" id="consul">
                        
                    </div>
                </section>
                
            </div>
                <marquee direction=''><img src='imagenes/images'/ width='300' align='left'></marquee>
        </div>
    </body>
</html>
<script type="text/javascript">
        $.ajax({
            url:"querys.php?accion=selectDatos",
            data:$('#consul')
        });
</script>