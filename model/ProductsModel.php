<?php

class ProductsModel{

    private $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=tpe_jt;charset=utf8', 'root', '');
    }

    //----------- GETS

    function getAllProducts(){
        $query = $this->db->prepare('SELECT a.`nombre`, a.`precio_kg` AS `precio`, b.`tipo`, a.`id_prod` AS id FROM `producto` a INNER JOIN tipo_producto b WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod`');
        $query->execute();

        return $items = $query->fetchAll(PDO::FETCH_OBJ); 
    }
    
    function getAllTypes(){
        $query = $this->db->prepare('SELECT tipo AS Tipo, descripcion AS Descripción, id_tipo_prod AS id FROM tipo_producto');
        $query->execute();

        return $tipos = $query->fetchAll(PDO::FETCH_OBJ); 
    }

    // ---------- GET ONE

    function getOneProduct($id){
        $query = $this->db->prepare('SELECT a.`nombre`, a.`precio_kg` AS `precio`, b.`tipo`, a.`id_prod` AS id FROM `producto` a INNER JOIN tipo_producto b WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod` AND a.`id_prod` = ?');
        $query->execute([$id]);

        return $product = $query->fetch(PDO::FETCH_OBJ); 
    }
    function getOneTypeProduct($id){
        $query = $this->db->prepare('SELECT tipo AS Tipo, descripcion AS Descripción, id_tipo_prod AS id FROM tipo_producto WHERE id_tipo_prod = ?');
        $query->execute([$id]);

        return $tipo = $query->fetch(PDO::FETCH_OBJ); 
    }


    // --------- INSERTS

    function insertProduct($nombre, $precio, $tipo){
        $query = $this->db->prepare('INSERT INTO `producto` (`nombre`, `tipo_prod_fk`, `precio_kg`) VALUES ( ?, ?, ?)');
        $query -> execute([$nombre, $tipo, $precio]);

        // 3. Obtengo y devuelo el ID nuevo
        return $this->db->lastInsertId();
    }

    function insertTypeProd($nombre, $descrip){
        $query = $this->db->prepare('INSERT INTO `tipo_producto` (`tipo`, `descripcion`) VALUES ( ?, ?)');
        $query -> execute([$nombre, $descrip]);

        // 3. Obtengo y devuelo el ID nuevo
        return $this->db->lastInsertId();
    }

    // -------- DELETES

    function delProduct($id){
        $query = $this->db->prepare('DELETE FROM `producto` WHERE producto.`id_prod` = ?');
        return $query->execute([$id]);
    }
    
    function delTypeProd($id){
        $query = $this->db->prepare('DELETE FROM `tipo_producto` WHERE tipo_producto.`id_tipo_prod` = ?');
        return $query->execute([$id]);
    }
    
    // -------- UPDATES

    function updateProduct($nombre, $precio, $tipo, $id){
        $query = $this->db->prepare('UPDATE producto a
        INNER JOIN tipo_producto b 
        ON `a`.`tipo_prod_fk` = `b`.`id_tipo_prod`
        SET `a`.`nombre` = ?, `a`.`precio_kg` =?, `a`.`tipo_prod_fk` =?
        WHERE `a`.`id_prod` = ?');
        return $query->execute([$nombre, $precio, $tipo, $id]);
    }

    function updateTypeProd($tipo, $descripcion, $id){
        $query = $this->db->prepare('UPDATE tipo_producto a
        SET `a`.`tipo` = ?, `a`.`descripcion` =?
        WHERE `a`.`id_tipo_prod` = ?');
        return $query->execute([$tipo, $descripcion, $id]);
    }
    
    // ----------- VISADOS (SIEMPRE AL ULTIMO)
    
    function visarIdProd($id){
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `producto` WHERE producto.`id_prod` = ?');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ); 
    }

    function visarIdTypeProd($id){
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `tipo_producto` AS a WHERE a.`id_tipo_prod` = ?');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ); 
    }

    // ----------- CONTAR PRODUCTOS PERTENECIENTES A UNA TIPO

    function contarReferencia($id){
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `producto` WHERE producto.`tipo_prod_fk` = ?');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ); 
    }
}