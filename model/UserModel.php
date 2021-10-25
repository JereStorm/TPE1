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
    public function SignUp($email,$pass)
    {   //---- HASH DE PASSWORD
        $hash = password_hash($pass,PASSWORD_BCRYPT);

        //---- INSERT USER EN LA DB
        $query = $this->db->prepare('INSERT INTO usuario (email, password, rol) VALUES ( ?, ?, ?)');
        $query -> execute([$email, $hash, 5]);

        // 3. Obtengo y devuelo el ID nuevo
        return $this->db->lastInsertId();
    }
}
