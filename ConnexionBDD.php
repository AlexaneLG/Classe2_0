<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=class2_0;charset=utf8','root','');
}
catch(Exception $exception){
    die('Erreur:' .$exception->getMessage());
}

?>