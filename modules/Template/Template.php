<?php

# Framework Panther.
# Autor: Valter A. Valentin
# Licença GPL 3.0
 
class Template {
    
    private function __construct() {}
    
    public static function getInstance() {
        static $inst = null;
        if($inst === null) {
            $inst = new Template();
        }
        return $inst;
    }
    
    public function render($tpl, $data = array()) {
        if(file_exists('templates/'.$tpl.'.php')) {
            require 'templates/'.$tpl.'.php';
        }
    }
}