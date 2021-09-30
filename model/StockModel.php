<?php

class StockModel{

    private $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=tpe_jt;charset=utf8', 'root', '');
    }

    //----------- GET ALL

    function getAllStock(){
        $query = $this->db->prepare('SELECT b. nombre AS Producto, a. cantidad AS Cantidad, a. id_stock AS id FROM stock a INNER JOIN producto b WHERE a. producto_fk = b. id_prod');
        $query->execute();

        return $items = $query->fetchAll(PDO::FETCH_OBJ); 
    }
/*
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
    */
}