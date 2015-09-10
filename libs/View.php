<?php 
/**
 * Clase para las vistas esta instanciado en el controlador base.
 * @autor Christian Falcon
 */
class View {
    
    public function __construct()
    {
        
    }
    /**
     * Funcion que renderiza las vistas.
     * @autor Christian Falcon.
     */
    public function render($nombre, $inclusion = false)
    {
        if ($inclusion) {
            require 'views/'.$nombre.'.php';
        } else {
            require_once 'views/header.php';
            require 'views/'.$nombre.'.php';
            require_once 'views/footer.php';
        }
    }
}

?>