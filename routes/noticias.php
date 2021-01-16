<?php

# Framework Panther
# author: Valter A. Valentin
# Licença GPL 3.0

$this->get('noticias', function($arg) {
    echo 'entrou em noticias';
});

$this->get('noticias/{id}', function($arg) {
    $tpl = $this->core->loadModule('template');
    $db = $this->core->loadModule('database');
    
    $sql = $db->query("SELECT * FROM noticias");
    $array = $sql->fetchAll();
    
    print_r($array);
    
    $tpl->render('teste', $array);
});
