<?php

class TypeProdModel
{

    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=web_tpe;charset=utf8', 'root', '');
    }

    //----------- GET ALL

    function getAll()
    {
        $query = $this->db->prepare('SELECT tipo AS Tipo, descripcion AS Descripción, id_tipo_prod AS id FROM tipo_producto');
        $query->execute();

        return $tipos = $query->fetchAll(PDO::FETCH_OBJ);
    }

    // ---------- GET ONE

    function getOne($id)
    {
        $query = $this->db->prepare('SELECT tipo AS Tipo, descripcion AS Descripción, id_tipo_prod AS id FROM tipo_producto WHERE id_tipo_prod = ?');
        $query->execute([$id]);

        return $tipo = $query->fetch(PDO::FETCH_OBJ);
    }

    // --------- INSERTS

    function insert($nombre, $descrip)
    {
        $query = $this->db->prepare('INSERT INTO `tipo_producto` (`tipo`, `descripcion`) VALUES ( ?, ?)');
        $query->execute([$nombre, $descrip]);

        // 3. Obtengo y devuelo el ID nuevo
        return $this->db->lastInsertId();
    }

    // -------- DELETES

    function delete($id)
    {
        $query = $this->db->prepare('DELETE FROM `tipo_producto` WHERE tipo_producto.`id_tipo_prod` = ?');
        return $query->execute([$id]);
    }

    // -------- UPDATES

    function update($tipo, $descripcion, $id)
    {
        $query = $this->db->prepare('UPDATE tipo_producto a
        SET `a`.`tipo` = ?, `a`.`descripcion` =?
        WHERE `a`.`id_tipo_prod` = ?');
        return $query->execute([$tipo, $descripcion, $id]);
    }

    // ----------- VISADOS (SIEMPRE AL ULTIMO)

    function visarIdTypeProd($id)
    {
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `tipo_producto` AS a WHERE a.`id_tipo_prod` = ?');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ);
    }

    // ----------- CONTAR PRODUCTOS PERTENECIENTES A UNA TIPO

    function contarReferencia($id)
    {
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `producto` WHERE producto.`tipo_prod_fk` = ?');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ);
    }
}
