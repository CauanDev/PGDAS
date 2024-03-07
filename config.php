<?php
    define('HOST', 'localhost');
    define('USER','root');
    define('PASS','');
    define('BASE','sislogin');

    $conn = mysqli_connect(HOST, USER, PASS, BASE);

$opcoes = array(
        "Dourados",
        "Itapora",
        "Cidrolandia"                                    
);

