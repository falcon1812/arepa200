<?php

class Index extends Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    public function getIndex()
    {
        $this->view->render('Index/index');
    }
}


?>