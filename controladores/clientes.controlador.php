<?php
Class ControladorClientes{
    /*=============================================
    REGISTRO DE UN NUEVO CLIENTE
    =============================================*/
    public static function CtrInsertarCliente(){
        if(isset($_POST["nuevoNombre"])){
            $datos = array(
                'nombre'                => $_POST["nuevoNombre"],
                'representante_legal'   => $_POST["nuevoRepre"],
                'rfc'                   => $_POST["nuevoRFC"], 
                'telefono'              => $_POST["nuevoTel"],
                'celular'      => $_POST["nuevoCel"],
                'direccion'      => $_POST["nuevaDireccion"]
            );
            $respuesta = ModeloClientes::MdlInsertarCliente($datos);
            if($respuesta == "ok"){
                echo '<script>
                    swal.fire({
                        icon: "success",
                        title:"¡El cliente se guardo correctamente!",
                        position: "top-end",
                        showConfirmButton: false,
                        toast: true,
                        timer: 2000
                    }).then(function(result){
                            window.location = "clientes";
                    });
                </script>';
            }else{
                
                echo '<script>
                    swal.fire({
                        icon: "error",
                        title: "¡Error al ingresar los datos!" ,
                        position: "top-end",
                        showConfirmButton: false,
                        toast: true,
                        timer: 2000
                    }).then(function(result){
                           window.location = "clientes";
                    });
                </script>'; 
            }
        }
    }
}