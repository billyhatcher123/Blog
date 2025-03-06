<?php

function getDatabaseConnection()
{
    $db = new PDO(
        'mysql:host=localhost;dbname=blog', // or the appropriate host
        'root',
        'password'
    );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
}

