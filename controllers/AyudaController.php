<?php

class Ayuda extends Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getIndex()
    {
        $this->view->render('Ayuda/Index');
    }
    
    
    public function ejemplo()
    {
        return $this->model->ejemplo();
    }
}

?>