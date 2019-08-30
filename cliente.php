<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/globalCSS.css" rel="stylesheet" style type="text/css">
        <title>Cliente</title>
        <script src="jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <?php
        include("header.php");
        ?>
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
            
        <div style="margin-left:5%"><br><br><br><br><br><br><br><br>
        <form id="ingreso" action="cliente.php" method="post">
        <p>
        <label style="margin-left">CEDULA:</label> <input type="text" name="id" style="margin-left:2%"><br><br>
        </p>
        <p>
        <label style="margin-left">NOMBRE:</label><input type="text" name="nombre" style="margin-left:2%"><br><br>
        </p>
        <p>
         <label style="margin-left">APELLIDO:</label><input type="text" name="apellido" style="margin-left:1%"><br><br>
        DIRECCION:<input type="text" name="direccion" style="margin-left:0.5%"><br><br>
        TELEFONO:<input type="text" name="telefono" style="margin-left:1%"><br><br>
        <input id="btnguardar" type="submit" value="Insertar">
        <marquee direction=""><img src="imagenes/images"/ width="300" align="right"></marquee>
        </form>
    </div>   
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#btnguardar').click(function(){
            //var datos=$('#ingreso').serialize();
            $.ajax({
                type:"POST",
                url:"querys.php?accion=insertarDatos",
                data:$('#ingreso').serialize(),
                success:function(a){
                    if(a==1){
                        alert("agregado con exito");
                    }else{
                        alert("Fallo el server");
                    }
                }
            });

            return false;
        });
    });
</script>