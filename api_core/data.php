<?php

    $hostName = 'localhost';
    $userNameBd = 'root';
    $password = '';
    $databaseName = 'usuarios_bd';
    $userTable = 'cadastro_usuarios';

    $conn = new mysqli("$hostName", "$userNameBd", "$password", "$databaseName");

?>