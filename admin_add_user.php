
<?php include 'config.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

try{
                $dbconnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO utilisateur (nom,prenom,email,mot_de_passe) VALUES('$nom','$prenom','$email','$mdp')";

echo "Compte reussi";
}
catch(PDOException $e)
    {
        echo $sql."<br>".$e->getMessage();
    }
                 $dbconnexion->exec($sql);


$dbconnexion = null;
?>