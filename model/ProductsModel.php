<?php

class ProductsModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=web_tpe;charset=utf8', 'root', '');
    }

    //----------- GET ALL

    function getAll()
    {
        $query = $this->db->prepare(
            'SELECT a.`nombre` AS Nombre, a.`precio_kg` AS `Precio`, b.`tipo` AS Tipo, a.`id_prod` AS id 
            FROM `producto` a 
            INNER JOIN tipo_producto b 
            WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod`'
        );
        $query->execute();

        return $items = $query->fetchAll(PDO::FETCH_OBJ);
    }

    //----------- CONTAR PRODUCTOS

    function countProd()
    {
        $query = $this->db->prepare('SELECT COUNT(*) AS cant FROM producto');
        $query->execute();

        return $items = $query->fetch(PDO::FETCH_OBJ);
    }

    //----------- GET PAGE

    function getPage($inicio)
    {
        $query = $this->db->prepare(
            'SELECT a.nombre AS Nombre, a.precio_kg AS Precio, b.tipo AS Tipo, a.id_prod AS id 
            FROM producto AS a 
            INNER JOIN tipo_producto AS b ON  a.tipo_prod_fk = b.id_tipo_prod
            ORDER BY a.nombre ASC
            LIMIT ' . $inicio . ', ' . ITEMS_BY_PAGE
        ); // desde $inicio, trae la cantidad de elementos indicados por ITEMS_BY_PAGE

        $query->execute();

        return $items = $query->fetchAll(PDO::FETCH_OBJ);
    }

    // ---------- GET ONE

    function getOne($id)
    {
        $query = $this->db->prepare(
            'SELECT a.`nombre` AS `Nombre`, a.`precio_kg` AS `Precio`, b.`tipo` AS Tipo, a.`id_prod` AS id 
            FROM `producto` a 
            INNER JOIN tipo_producto b 
            WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod` AND a.`id_prod` = ?'
        );
        $query->execute([$id]);

        return $product = $query->fetch(PDO::FETCH_OBJ);
    }

    // --------- INSERTS

    function insert($nombre, $precio, $tipo)
    {
        $query = $this->db->prepare('INSERT INTO `producto` (`nombre`, `tipo_prod_fk`, `precio_kg`) VALUES ( ?, ?, ?)');
        $query->execute([$nombre, $tipo, $precio]);

        // 3. Obtengo y devuelo el ID nuevo
        return $this->db->lastInsertId();
    }

    // -------- DELETES

    function delete($id)
    {
        $query = $this->db->prepare('DELETE FROM `producto` WHERE producto.`id_prod` = ?');
        return $query->execute([$id]);
    }

    // -------- UPDATES

    function update($nombre, $precio, $tipo, $id)
    {
        $query = $this->db->prepare(
            'UPDATE producto a
        INNER JOIN tipo_producto b 
        ON `a`.`tipo_prod_fk` = `b`.`id_tipo_prod`
        SET `a`.`nombre` = ?, `a`.`precio_kg` =?, `a`.`tipo_prod_fk` =?
        WHERE `a`.`id_prod` = ?'
        );

        return $query->execute([$nombre, $precio, $tipo, $id]);
    }

    // ----------- VISADOS (SIEMPRE AL ULTIMO)

    function visarIdProd($id)
    {
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `producto` WHERE producto.`id_prod` = ?');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ);
    }
    // ------------ BUSCAR 

    function buscarProduct($producto)
    {

        // 2. Enviamos la consulta (2 sub pasos)
        $query = $this->db->prepare('SELECT a.`nombre` AS Nombre, a.`precio_kg` AS `Precio`, b.`tipo` AS Tipo, a.`id_prod` AS id FROM `producto` a INNER JOIN tipo_producto b WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod` AND `a`.`nombre` LIKE ?');
        $query->execute([$producto]);

        // 3. obtengo la respuesta de la DB
        $busquedas = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS los Pagos

        return $busquedas;
    }

    // ------------ FILTRAR 


    function filtrarProducts($tipo)
    {
        // 2. Enviamos la consulta (2 sub pasos)
        $query = $this->db->prepare('SELECT a.`nombre` AS Nombre, a.`precio_kg` AS `Precio`, b.`Tipo`, a.`id_prod` AS id FROM `producto` a INNER JOIN tipo_producto b WHERE `a`.`tipo_prod_fk` = `b`.`id_tipo_prod` AND `a`.`tipo_prod_fk` LIKE ?');
        $query->execute([$tipo]);

        // 3. obtengo la respuesta de la DB
        $filtradas = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS los Pagos

        return $filtradas;
    }
    // ------------ HACE UN CONTEO DE LOS ELEMENTOS REFERENCIADOS

    function contarReferencia($id)
    {
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `stock` WHERE stock.`producto_fk` = ?');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ);
    }
}
