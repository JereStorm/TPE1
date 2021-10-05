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

    // ---------- GET ONE

    function getOneStockId($id){
        $query = $this->db->prepare('SELECT * FROM stock WHERE id_stock = ?');
        $query->execute([$id]);

        return $product = $query->fetch(PDO::FETCH_OBJ); 
    }

    function getOneStockIdProd($id){
        $query = $this->db->prepare('SELECT * FROM stock WHERE producto_fk = ?');
        $query->execute([$id]);

        return $product = $query->fetch(PDO::FETCH_OBJ); 
    }

    // -------- UPDATES

    function updateStock($id, $cantidad_tot){
    $query = $this->db->prepare(
    'UPDATE stock
    SET cantidad = ?
    WHERE id_stock = ?');
    
    return $query->execute([$cantidad_tot, $id]);
    }
    

    // --------- INSERTS

    function insertNewStock($id_prod, $cant){
        $query = $this->db->prepare('INSERT INTO `stock` (`producto_fk`, `cantidad`) VALUES (?, ?)');
        $query->execute([$id_prod, $cant]);

        return $this->db->lastInsertId();
    }

    // ----------- VISADOS (SIEMPRE AL ULTIMO)

    function visarIdStock($id){
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `stock` WHERE `id_stock` = ?');
        $query->execute([$id]);
        return $value = $query->fetch(PDO::FETCH_OBJ); ;
    }
    

    // -------- DELETES

    function delStock($id){
        $query = $this->db->prepare('DELETE FROM `stock` WHERE `id_stock` = ?');
        return $query->execute([$id]);
    }
}