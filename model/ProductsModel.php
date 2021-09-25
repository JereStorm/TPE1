<?php

class ProductsModel{

    private $db;

    public function __construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=;charset=utf8', 'root', '');
    }

    
}