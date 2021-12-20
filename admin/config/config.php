<?php
try
{
$db = new PDO('mysql:host=127.0.0.1;dbname=coiffure', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
?>