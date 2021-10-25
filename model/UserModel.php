<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tpe_jt;charset=utf8', 'root', '');
    }

    function getUser($email)
    {
        $query = $this->db->prepare('SELECT email, password, rol, id_user AS id FROM usuario WHERE email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}
