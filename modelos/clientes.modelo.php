<?php
require_once "conexion.php";
Class ModeloClientes{
    /*=============================================
    REGISTRO DE UN NUEVO CLIENTE
    =============================================*/
    public static function MdlInsertarCliente($datos){
        /*/
        $query='INSERT INTO clientes 
        (nombre, representante_legal, rfc, direccion, telefono, celular) VALUES 
        ("'.$datos["nombre"].'","'. $datos["representante_legal"].'","'. $datos["rfc"]
        .'","'.$datos["direccion"].'","'.$datos["telefono"].'","'.$datos["celular"].'")';
        $stmt = Conexion::conectar()->prepare($query);//*/
       //*
        $stmt = Conexion::conectar()->prepare("INSERT INTO clientes 
                (nombre, representante_legal, rfc, direccion, telefono, celular) VALUES 
                (:nombre, :representante_legal, :rfc, :direccion, :telefono, :celular)");//*/
                
                //*
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":representante_legal", $datos["representante_legal"], PDO::PARAM_STR);
        $stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":celular", $datos["celular"], PDO::PARAM_STR);
        /*
            echo '<script>';
            echo 'console.log('. json_encode( $e) .')';
            echo '</script>';
        //*/
        try{
            if ($stmt->execute()) {
                return "ok";
            } else {
                
                return "error";
                
            }
        }catch(Exception $e){
            return "error";
        }
    }
}