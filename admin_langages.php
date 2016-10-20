<?php

include 'config.php';

include 'connexion.php';



$req = $dbconnexion->query(" SELECT * FROM Langage");
foreach ($req as $utilisateur){
    echo  $utilisateur['titre'].'<br>'.$utilisateur['description'].'<br>';
}




?>