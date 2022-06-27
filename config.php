<?php

try {
    $dbb=  new PDO('mysql:host=localhost;dbname=projet_sante; charset=utf8', 'root', 'root');
} catch (Exception $e)
{
    die('Erreur' .$e ->getMessage());
}

?>