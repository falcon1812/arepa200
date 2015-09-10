<?php

class EstoModel extends Model {
    
    public function __construct()
    {
       
    }
    
    public function run()
    {
       $this->db->query('select * from index');
    }
}


?>