<?php

class ProductsModel{

    private $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=tpe_jt;charset=utf8', 'root', '');
    }

    function getAllProducts(){
        $query = $this->db->prepare('SELECT * FROM `producto`');
        $query->execute();

        // 3. obtengo la respuesta de la DB
        return $materias = $query->fetchAll(PDO::FETCH_ASSOC); 
        // obtengo un arreglo con TODAS los Pagos
    }
    
    
}