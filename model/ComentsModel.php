<?php

class ComentsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_jt;charset=utf8', 'root', '');
    }

    //----------- GET ALL

    function getAllComents()
    {
        $query = $this->db->prepare('');
        $query->execute();

        return $items = $query->fetchAll(PDO::FETCH_OBJ);
    }

    // ---------- GET ONE

    function getOneComent($id)
    {
        $query = $this->db->prepare('');
        $query->execute([$id]);

        return $product = $query->fetch(PDO::FETCH_OBJ);
    }

    // --------- INSERTS

    function insertProduct($nombre, $precio, $tipo)
    {
        $query = $this->db->prepare('');
        $query->execute([$nombre, $tipo, $precio]);

        // 3. Obtengo y devuelo el ID nuevo
        return $this->db->lastInsertId();
    }

    // -------- DELETES

    function delComent($id)
    {
        $query = $this->db->prepare('');
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


    function filtrarComents($tipo)
    {
        // 2. Enviamos la consulta (2 sub pasos)
        $query = $this->db->prepare('');
        $query->execute([$tipo]);

        // 3. obtengo la respuesta de la DB
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
