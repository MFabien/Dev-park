<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Dev Park</title>
    </head>

    <body>
    <?php include'connexion.php';?>

    <form method="post" action="admin_add_user.php">

        nom : <input type="text" name="nom" size="12"/>
        <br/>
        prenom : <input type="text" name="prenom" size="12"/>
        <br/>
        email : <input type="email" name="email" size="12"/>
        <br/>
        mot de passe : <input type="password" name="mdp" size="12"/>
        <br/>
        Admin :<input type="radio" name="role" value="Admin"/>

        Membre :<input type="radio" name="role" value="Membre"/>
        <br>
        <input type="submit" value="valider"/>


        <?php include 'config.php';


        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $role = $_POST['role'];


        try{
            $dbconnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO utilisateur (nom,prenom,email,mot_de_passe,role) VALUES('$nom','$prenom','$email','$mdp','$role')";

            echo "Compte reussi";
        }
        catch(PDOException $e)
        {
            echo $sql."<br>".$e->getMessage();
        }
        $dbconnexion->exec($sql);


        $dbconnexion = null;
        ?>
    </form>

    </body>
    </html>
