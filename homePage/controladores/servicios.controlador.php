<?php

class ControladorServicios{

    /*==============================================
     TRAER TODOS LOS SERVICIOS 
    /*=============================================*/

    public function ctrMostrarServicios(){

        $tabla = "servicios";

        $respuesta = ModeloServicios::mdlMostrarServicios($tabla);

        return $respuesta;

    }

}