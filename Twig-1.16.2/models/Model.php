<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author h13cleri
 */
class Model {
    //put your code here
    
    public function getAllComponents(){
        
        $dsn = 'mysql:host=utb-mysql.du.se;dbname=db30';
        $username = 'db30';
        $password = 'FJJAcyMU';
        
        $pdocon = new PDO($dsn, $username,$password);
        
        $pdoStatement = $pdocon->prepare('CALL getAllComponents()');
        $pdoStatement->execute();
        
        $cars = $pdoStatement->fetchAll();
        var_dump($cars);
        $pdocon = null;
        
        return $cars;
        
    } 
    
}
