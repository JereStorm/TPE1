<?php


class HomeModel{

    private $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=tpe_jt;charset=utf8', 'root', '');
    }

    function getAll(){
        $query = $this->db->prepare('SELECT a.`nombre` AS Producto, a.`precio_kg` AS `Precio`, b.`tipo` AS Tipo, a.`id_prod` AS id FROM `producto` a INNER JOIN tipo_producto b WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod`');
    
        $query->execute();

        return $items = $query->fetchAll(PDO::FETCH_OBJ); 
    }

}