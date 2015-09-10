<?php

class Esto extends Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getIndex()
    {
        $this->view->render('Esto/index');
    }
    
    public function run()
    {
        $this->view->msj = $this->model->run();
    }
}

?>