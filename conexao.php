<?php
    define('HOST', '201.48.8.141');
    define('USER', 'dcenge68_admin');
    define('PASSWORD', 'A@nderson301165');
    define('DB', 'dcenge68_goobra');

    $db = new mysqli(HOST, USER, PASSWORD, DB) or die ('Erro ao conectar');
    $db->set_charset("utf8");
?>