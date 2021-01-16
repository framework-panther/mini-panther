<?php

# Framework Panther
# author: Valter A. Valentin
# Licença GPL 3.0

$this->get('noticias', function($arg) {
    echo 'entrou em noticias';
});

$this->get('noticias/{id}', function($arg) {
    print_r($arg);
    echo 'quero ver uma notícia específica...';
});

$this->get('nome/{nome}/{idade}', function($arg){
    echo "Meu nome: ".$arg['nome']."e eu tenho ".$arg['idade']." anos";
});