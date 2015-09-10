<?php
/**
 * Clase que relaciona los controladores con las vistas (Controlador base).
 * @autor Christian Falcon
 */
class Controller {
    
    public function __construct()
    {
        $this->view = new View();
    }
    /**
     * Funcion que trae el modelo si existe.
     * @autor Christian Falcon.
     */
    public function loadModel($nombre) {
        $ruta = 'models/'.$nombre.'Model.php';
        if (file_exists($ruta)) {
            require $ruta;
            $Modelo = $nombre.'Model';
            $this->model = new $Modelo; // instancia el modelo.
        }
    }
}

?>