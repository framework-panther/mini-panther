<?php

# Framework Panther
# author: Valter A. Valentin
# Licença GPL 3.0

$this->get('noticias', function($arg) {
    echo 'entrou em noticias';
});

$this->get('noticias/{id}', function($arg) {
    $tpl = $this->core->loadModule('template');
    
    $array = array('id'=>$arg['id']);
    
    $tpl->render('teste', $array);
});
