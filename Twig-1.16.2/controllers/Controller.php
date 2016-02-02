<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author h13cleri
 */

require_once '../lib/Twig/Autoloader.php';
require_once '../models/Model.php';

class Controller {
    
    
    
    public function getAllComponents(){
        
        $model = new Model();
        $bilarna = $model->getAllComponents();
        Twig_Autoloader::register();
        
        $loader = new Twig_Loader_Filesystem('../templates');
        $twig = new Twig_Environment($loader);
        $template = $twig->loadTemplate('Vyn.twig');
        $template->display(array('h13cleri_produkter'=>$bilarna));
    }
    
    
}
