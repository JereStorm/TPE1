<?php

class ComentsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=web_tpe;charset=utf8', 'root', '');
    }

    //----------- GET ALL

    function getAll($id_prod, $sql)
    {
        $query = $this->db->prepare(
            $sql
        );
        $query->execute([$id_prod]);

        return $items = $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getAllOrder($id_prod, $sql)
    {
        $query = $this->db->prepare($sql);
        $query->execute([$id_prod]);

        return $items = $query->fetchAll(PDO::FETCH_OBJ);
    }

    // ---------- GET ONE

    function getOne($id)
    {
        $query = $this->db->prepare(
            'SELECT c.*, u.email 
            FROM `comentario` AS c 
            INNER JOIN `usuario` AS u 
            ON c.`id_user_fk` = u.`id_user`
            WHERE id_comen = ?'
        );
        $query->execute([$id]);

        return $coment = $query->fetch(PDO::FETCH_OBJ);
    }

    // --------- INSERTS

    function insert($mensaje, $fecha, $puntaje, $id_user, $id_prod)
    {
        $query = $this->db->prepare('INSERT INTO comentario(mensaje, fecha, puntaje, id_user_fk, id_prod_fk) VALUES(?,?,?,?,?)');
        $query->execute([$mensaje, $fecha, $puntaje, $id_user, $id_prod]);

        // 3. Obtengo y devuelo el ID nuevo
        return $this->db->lastInsertId();
    }

    // -------- DELETES

    function delete($id)
    {
        $query = $this->db->prepare('DELETE FROM comentario WHERE id_comen = ?');
        return $query->execute([$id]);
    }

    // ----------- VISADOS (SIEMPRE AL ULTIMO)

    function visarIdComent($id)
    {
        $query = $this->db->prepare('');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ);
    }

    // ------------ FILTRAR 


    function filtrarComents($puntaje)
    {
        // 2. Enviamos la consulta (2 sub pasos)
        $query = $this->db->prepare(
            'SELECT c.*, u.email 
            FROM `comentario` AS c 
            INNER JOIN `usuario` AS u 
            ON c.`id_user_fk` = u.`id_user`
            WHERE c.`puntaje` = ?'
        );
        $query->execute([$puntaje]);

        $filtradas = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS los Pagos

        return $filtradas;
    }
    // ------------ HACE UN CONTEO DE LOS ELEMENTOS REFERENCIADOS

    function contarReferencia($id)
    {
        $query = $this->db->prepare('');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ);
    }
}
