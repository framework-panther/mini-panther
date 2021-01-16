<?php

# Framework Panther
# author: Valter A. Valentin
# Licença GPL 3.0

$this->get('', function($arg){
    echo 'home';
});

$this->loadRouteFile('noticias');