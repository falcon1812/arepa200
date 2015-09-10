<?php

class Error extends Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getIndex()
    {
        $this->view->render('Error/index');
    }
    
    
}

?>