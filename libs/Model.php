<?php
/**
 * Modelo base.
 * @autor Christian Falcon.
 */
class Model {
    
    public function __construct()
    {
        $this->db = new Database();   
    }
    
}

?>