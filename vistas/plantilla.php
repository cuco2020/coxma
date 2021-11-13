<?php
//Sesion
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="vistas/plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="vistas/css/style.min.css" rel="stylesheet">
    <!--  Bootstrap 5 -->
    <link rel="stylesheet" href="vistas/plugins/bootstrap/css/bootstrap.min.css" />
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="vistas\plugins\sweetalert2\sweetalert2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="vistas/plugins/datatables/css/dataTables.bootstrap5.css" />
    <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap5.min.css" />
    <!--Personalizados-->
    <link rel="stylesheet" type="text/css" href="vistas/css/estilos.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- jQuery -->
    <script type="text/javascript" src="vistas\plugins\jQuery\jquery-3.6.0.js"></script>
    <!-- Bootstrap 5 -->
    <script type="text/javascript" src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="vistas/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="vistas\js\app-style-switcher.js"></script>
     <!-- fontawesome -->
    <!-- <script type="text/javascript" src="vistas/plugins/fontawesome/js/all.min.js"></script> -->
    <!-- DataTables -->
    <script type="text/javascript" src="vistas/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="vistas/plugins/datatables/js/dataTables.bootstrap5.min.js"></script>
    <!-- SweetAlert 2 -->
    <script type="text/javascript" src="vistas\plugins\sweetalert2\sweetalert2.min.js"></script>
</head>

<?php
        include("modulos/header.php");
        include("modulos/menu.php");
        /**Rutas */
        if(isset($_GET["ruta"])){
            $direccion = dirname(__FILE__);
            $jsondata = file_get_contents($direccion . "/" . "rutas");
            $rutas = json_decode($jsondata,true);
            $ruta = $_GET["ruta"];
            $rutaStatus = false;
            foreach ($rutas as $key => $value) {
                if($ruta == $value[$key]){
                    include "modulos/".$ruta.".php";
                    $rutaStatus = true;
                    break;
                }
            }
            
            if(!$rutaStatus){
                include "modulos/body.php";
            }
            //include("modulos/body.php");//Plantilla del cuerpo
        }else{
            include("modulos/body.php");//Plantilla del cuerpo
        }
        
        /**End Rutas */
        include("modulos/footer.php")


?>