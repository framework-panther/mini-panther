<?php

# Framework Panther
# author: Valter A. Valentin
# Licença GPL 3.0

$this->get('noticias', function($arg) {
    echo 'entrou em noticias';
});

$this->get('noticias/{id}', function($arg) {
    echo 'quero ver uma notícia específica...';
});