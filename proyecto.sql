use pquinde;
CREATE TABLE `facturas` (
  `id_factura` int not null,
  `dias_alquiler` int NOT NULL,
  `costo_dia` float(10) NOT NULL,
  `total_descuento` float(10) NOT NULL,
  `total_iva` float(10) NOT NULL,
  `total_pagar` float(50) NOT NULL,
  `fecha_ingreso` varchar(10) NOT NULL,
  `fk_vehiculo` varchar(20) NOT NULL,
  `fk_id` varchar(50) NOT NULL,
  `fk_nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_factura`),
  FOREIGN KEY (fk_id) REFERENCES cliente(id),
  FOREIGN KEY (fk_nombre) REFERENCES cliente(nombre),
  FOREIGN KEY (fk_vehiculo) REFERENCES vehiculos (tipovehiculo)
);
CREATE TABLE `cliente` (
  `id` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);
create table `vehiculos` (
	`categoria` varchar(1) not null,
	`tipovehiculo` varchar (50) not null,
    `costodia` int not null,
    `descuentome` varchar(10) not null,
    `descuentoma` varchar(10) not null,
    PRIMARY KEY (`categoria`)
);
INSERT INTO `cliente` VALUES ('111111111', 'paul', 'quinde', 'ignacio de olaso','3840881');
INSERT INTO `cliente` VALUES ('222222222', 'andre', 'cruz', '1er pasje','0993423187');
insert into `vehiculos` values('A','automovil','90','2%','3%');
insert into `vehiculos` values('B','camioneta','120','2.5','3.5');
insert into `vehiculos` values('C','vans','150','3%','4%');
insert into `vehiculos` values('D','camion','250','3.5','4.5');