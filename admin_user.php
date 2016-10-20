<?php

include 'config.php';

include 'connexion.php';



             $req = $dbconnexion->query(" SELECT * FROM utilisateur");
            foreach ($req as $utilisateur){
                            echo  $utilisateur['nom'].' '.$utilisateur['prenom'].'<br>';
            }


 $req->closeCursor();

?>