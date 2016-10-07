<?php include 'config.php';


             $req = $dbconnexion->query(" SELECT * FROM utilisateur");
            foreach ($req as $utilisateur){
                            echo  $utilisateur['nom'].' '.$utilisateur['prenom'].'<br>';
            }


 $req->closeCursor();

?>