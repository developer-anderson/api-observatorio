<?php
define( 'DB', 'escunass_novo' );

/** MySQL database username */
define( 'USER', 'escunass_site' );

/** MySQL database password */
define( 'PASSWORD', 'A@nderson301165' );

/** MySQL hostname */
define( 'HOST', '108.179.192.20' );


    $db = new mysqli(HOST, USER, PASSWORD, DB) or die ('Erro ao conectar');
    $db->set_charset("utf8");
?>