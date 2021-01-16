<?php

# Framework Panther.
# Autor: Valter A. Valentin
# Licença GPL 3.0
 
class Database {
    
    private $pdo;
    
    private function __construct() {
        $core =Core::getInstance();
        $db = $core->getConfig('db');
        
        try {
            $this->pdo = new PDO("mysql:dbname=".$db['dbname'].";host=".$db['host'].";user=".$db['user'].";pass=".$db['pass'].";");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public static function getInstance() {
        static $inst = null;
        if($inst === null) {
            $inst = new Database();
        }
        return $inst;
    }
    
    public function query($sql) {
        return $this->pdo->query($sql);
    }
    
    public function prepare($sql) {
        return $this->pdo->prepare($sql);
    }
    
    public function execute($sql) {
        return $this->pdo->execute($array);
    }
}