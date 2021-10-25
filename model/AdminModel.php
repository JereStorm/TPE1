<?php

class AdminModel{

    private $db;
    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=tpe_jt;charset=utf8', 'root', '');
    }

    //----------- GET ALL

    function getAll(){
        $query = $this->db->prepare('SELECT a.`email` AS Usuario, a.`rol` AS `Rol`, `id_user` AS id FROM `usuario` a');
        $query->execute();

        return $items = $query->fetchAll(PDO::FETCH_OBJ); 
    }

    // ---------- GET ONE

    function getOne($id){
        $query = $this->db->prepare('SELECT SELECT a.`email` AS Usuario, a.`rol` AS `Rol`, `id_user` AS id FROM `usuario` a WHERE `id_user` = ?');
        $query->execute([$id]);

        return $product = $query->fetch(PDO::FETCH_OBJ); 
    }

    // --------- INSERTS

    function insertProduct($email, $pass){
        $query = $this->db->prepare('INSERT INTO `usuario` (`email`, `$password`, `rol`) VALUES ( ?, ?, ?)');
        $query -> execute([$email, $pass, 3]);

        // 3. Obtengo y devuelo el ID nuevo
        return $this->db->lastInsertId();
    }

    // -------- DELETES

    function delUser($id){
        $query = $this->db->prepare('DELETE FROM `usuario` WHERE `id_user` = ?');
        return $query->execute([$id]);
    }
    
    // -------- UPDATES

    function updateProduct($email, $pass, $rol, $id){
        $query = $this->db->prepare(
        'UPDATE usuario
        SET `email` = ?, `rol` =?, `password` =?
        WHERE `id_user` = ?');
        
        return $query->execute([$email, $rol, $pass, $id]);
    }
    
    // ----------- VISADOS (SIEMPRE AL ULTIMO)
    
    function visarIdUser($id){
        $query = $this->db->prepare('SELECT COUNT(*) AS val FROM `usuario` WHERE `id_user` = ?');
        $query->execute([$id]);

        return $value = $query->fetch(PDO::FETCH_OBJ); 
    }

    // ------------ FILTRAR 

    
    function filtrarRol($rol){
        // 2. Enviamos la consulta (2 sub pasos)
        $query = $this->db->prepare('SELECT `email` AS Usuario, `rol` AS Rol, `id_user` AS id FROM `usuario` a  WHERE `rol` = ?');
        $query->execute([$rol]);

        // 3. obtengo la respuesta de la DB
        $filtradas = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS los Pagos

        return $filtradas;
    }
}