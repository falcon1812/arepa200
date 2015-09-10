<?php

class Merwe extends Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    public function getIndex()
    {
        $this->view->render('Merwe/index');
    }
}


?>