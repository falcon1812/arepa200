<?php 
/**
 * Clase que inicia.
 * @autor Christian Falcon.
 */
class Bootstrap {
    
    public function __construct()
    {
    // Verificio si la url existe si no es null y asi no retorna error.
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    // limpio la url quitando los /             
    $url = rtrim($url, '/');
    // Hago un explote de la url para convertirla en un arreglo.
    $url = explode('/',$url);
        
    // Retorno a la vista del index si la url esta vacia.
    if (empty($url[0])) {
        require_once ('controllers/indexController.php');
        $controller = new Index();
        $controller->getIndex();
        return false;
    }
    // Verifico que la url del controlador sea valida si no lo es devuelve error.
    $file = 'controllers/'.$url[0].'Controller.php';
    if (file_exists($file)) {
        require $file;
    } else {
        return $this->error();
    }
        
    // Pido el controlador correspondiente de acuerdo a la url en la posicion 0.
    $controller = new $url[0];
    //  Pido el modelo.
    $controller->loadModel($url[0]); 
        
    // Verifico si se pasa otro elemento por la url.
    if (isset($url[2])) {
        // Verifico si el metodo existe en el controlador.
        if (method_exists($controller, $url[1])) {
            // le paso al metodo el segundo parametro.
            $controller->{$url[1]}($url[2]);
        } else {
            return $this->error();
        }
    } else {
        // Verifico si se llama a algun metodo del controlador.
        if (isset($url[1])){
            if (method_exists($controller, $url[1])) {
                // Llamo a la funcion de ese controlador.
                $controller->{$url[1]}();
            } else {
                return $this->error();
            }
        } else {
                $controller->getIndex();
            }
        }  
    }
    
    /**
     * Funcion que retorna error.
     */
    public function error() {
		require 'controllers/ErrorController.php';
		$controller = new Error();
		$controller->getIndex();
		return false;
	}
}

?>