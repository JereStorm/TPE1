<?php

class ProductsModel{

    private $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=tpe_jt;charset=utf8', 'root', '');
    }

    //----------- GET ALL

    function getAllProducts(){
        $query = $this->db->prepare('SELECT a.`nombre`, a.`precio_kg` AS `precio`, b.`tipo`, a.`id_prod` AS id FROM `producto` a INNER JOIN tipo_producto b WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod`');
        $query->execute();

        return $items = $query->fetchAll(PDO::FETCH_OBJ); 
    }

    // ---------- GET ONE

    function getOneProduct($id){
        $query = $this->db->prepare('SELECT a.`nombre`, a.`precio_kg` AS `precio`, b.`tipo`, a.`id_prod` AS id FROM `producto` a INNER JOIN tipo_producto b WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod` AND a.`id_prod` = ?');
        $query->execute([$id]);

        return $product = $query->fetch(PDO::FETCH_OBJ); 
    }

    // --------- INSERTS

    function insertProduct($nombre, $precio, $tipo){
        $query = $this->db->prepare('INSERT INTO `producto` (`nombre`, `tipo_prod_fk`, `precio_kg`) VALUES ( ?, ?, ?)');
        $query -> execute([$nombre, $tipo, $precio]);

        // 3. Obtengo y devuelo el ID nuevo
        return $this->db->lastInsertId();
    }

    // -------- DELETES

    function delProduct($id){
        $query = $this->db->prepare('DELETE FROM `producto` WHERE producto.`id_prod` = ?');
        return $query->execute([$id]);
    }
    
    // -------- UPDATES

    function updateProduct($nombre, $precio, $tipo, $id){
        $query = $this->db->prepare(
        'UPDATE producto a
        INNER JOIN tipo_producto b 
        ON `a`.`tipo_prod_fk` = `b`.`id_tipo_prod`
        SET `a`.`nombre` = ?, `a`.`precio_kg` =?, `a`.`tipo_prod_fk` =?
        WHERE `a`.`id_prod` = ?');
        
        return $query->execute([$nombre, $precio, $tipo, $id]);
    }
    
    // ----------- VISADOS (SIEMPRE AL ULTIMO)
    
    function visarIdProd($id){
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `producto` WHERE producto.`id_prod` = ?');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ); 
    }

    // ------------ FILTRAR 

    
    function filtrarProducts($tipo){
        // 2. Enviamos la consulta (2 sub pasos)
        $query = $this->db->prepare('SELECT a.`nombre`, a.`precio_kg` AS `precio`, b.`tipo`, a.`id_prod` AS id FROM `producto` a INNER JOIN tipo_producto b WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod` AND `a`.`tipo_prod_fk` LIKE ?');
        $query->execute([$tipo]);

        // 3. obtengo la respuesta de la DB
        $filtradas = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS los Pagos

        return $filtradas;
    }
}