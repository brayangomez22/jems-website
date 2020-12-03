<?php

class ControladorProductos{

    /*==============================================
     TRAER TODOS LOS SERVICIOS 
    /*=============================================*/

    public function ctrMostrarProductos(){

        $tabla = "productos";

        $respuesta = ModeloProductos::mdlMostrarProductos($tabla);

        return $respuesta;

    }

}