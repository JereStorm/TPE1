<?php

class ProductsModel{

    private $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=tpe_jt;charset=utf8', 'root', '');
    }

    function getAllProducts(){
        $query = $this->db->prepare('SELECT a.`nombre`, a.`precio_kg` AS `precio`, b.`tipo`, b.`descripcion` FROM `producto` a INNER JOIN tipo_producto b WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod`');
        $query->execute();

        // 3. obtengo la respuesta de la DB
        return $materias = $query->fetchAll(PDO::FETCH_OBJ); 
        // obtengo un arreglo con TODAS los Pagos
    }
    
    
}