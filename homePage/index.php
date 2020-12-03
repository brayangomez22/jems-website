<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/servicios.controlador.php";
require_once "controladores/productos.controlador.php";

require_once "modelos/servicios.modelo.php";
require_once "modelos/productos.modelo.php";

require_once "modelos/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();