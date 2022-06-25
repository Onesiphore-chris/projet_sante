<?php

try {
    $dbb= new PDO("mysql:host=localhost;dbname=sante; charset=utf8; 'root', 'root' ");
} catch (Exception $e)
{
    die('Erreur' .$e ->getMessage());
}

?>