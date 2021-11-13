    <?php
        require_once "controladores/plantilla.controlador.php";
        require_once "controladores/clientes.controlador.php";
        require_once "modelos/clientes.modelo.php";
        $plantilla = new ControladorPlantilla();
        $plantilla->ctrPlantilla();
    ?>