<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include_once '../controllers/Controller.php';
        $queryArray = explode('/', $_SERVER['QUERY_STRING']);
        $cont = new Controller();
        
        $cont -> $queryArray[0]();
        
        ?>
    

