<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Dev Park</title>
    </head>

    <body>
    <?php include'connexion.php';?>

    <form method="post" action="admin_add_langage.php">

       titre : <input type="text" name="titre" size="12"/>
        <br/>
        description :<textarea name="description"></textarea>
        <br/>
        <input type="submit" value="valider"/>


        <?php include 'config.php';


        $titre= $_POST['titre'];
        $description = $_POST['description'];


        try{
            $dbconnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO Langage (titre,description) VALUES('$titre','$description')";

            echo "envoyer";
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
