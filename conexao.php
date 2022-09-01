<?php
    define('HOST', '201.48.8.141');
    define('USER', 'dcenge68_david');
    define('PASSWORD', '123456');
    define('DB', 'dcenge68_medidor_vazao');

    $db = new mysqli(HOST, USER, PASSWORD, DB) or die ('Erro ao conectar');
    $db->set_charset("utf8");
    
?>