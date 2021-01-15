<?php

# Framework Panther.
# Autor: Valter A. Valentin
# Licença GPL 3.0

class Core {
    
    private $config;
	
    private function __construct() {}
	
    public static function getInstance() {
	static $inst = null;
	if($inst === null) {
            $inst = new Core();
	}
	return $inst;
    }
    
    public function run($cfg) {
        $this->config = $cfg;       
    }
    
    public function getConfig($name) {
        return $this->config[$name];
    }
}

