<?php

require_once "conexion.php";

class ModeloProductos{

    /*==============================================
     TRAER TODOS LOS SERVICIOS 
    /*=============================================*/

    static public function mdlMostrarProductos($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetchAll();

        $stmt -> close();

        $stmt = null;

    }

}