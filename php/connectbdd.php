<?php
try   {
  // Je me connecte à ma bdd
  $bdd = new PDO("mysql:host=localhost:3306;dbname=autosrepare", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}

?>