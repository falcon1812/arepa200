<?php

class AyudaModel extends Model {
    
	public function __construct()
    {
       parent::__construct();
    }
	
    public function ejemplo()
    {
        $query = $this->db->prepare("select * from index");
        $query = $query->execute(array($query));
        $datos = $query->fetchAll();
        return $datos;
    }
}


?>