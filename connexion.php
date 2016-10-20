<?php

$_SESSION['logged'] = false;
$LOGGED = $_SESSION['logged'];

?>
<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Dev Park</title>
    </head>
    <body>


    <form action="connexion.php"method="post">
        <label>email:</label><br>
        <input type="email"name="email"><br>
        <label>mot de passe:</label><br>
        <input type="password"name="mot_de_passe"><br>
        <input type="submit"name="login" value="connexion">
    </form>

    <?php include 'config.php';

    if(isset($_POST)&& !empty($_POST['login']) && !empty($_POST['pass'])){
        extract($_POST);
        $login = $_POST['login'];
        $pass = $_POST['pass'];
    }

    if (isset($_POST['login'])){
        $pemail = (isset($_POST['email'])) ? $_POST['email'] : "";
        $ppassword = (isset($_POST['mot_de_passe'])) ? $_POST['mot_de_passe'] : "";

        $sql = "SELECT prenom, nom, email, mot_de_passe, role FROM utilisateur";

        $result = $dbconnexion->query($sql);

        if($result->rowCount($result)>0){
            while($row = $result->fetch()){

                if(($row['email'] === $pemail) && ($row['mot_de_passe']===$ppassword)){
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['mot_de_passe'] = $row['mot_de_passe'];
                    $_SESSION['prenom'] = $row['prenom'];
                    $_SESSION['nom'] = $row['nom'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['logged'] = true;
                    $LOGGED = $_SESSION['logged'];


                }
            }


        }

    }

    if($LOGGED){

        echo $_SESSION['nom'].' '.$_SESSION['prenom'].' est connecté en tant que '.$_SESSION['role'];
    }

if($_SESSION['role'] == "admin") {
                include 'menu.php';
}
else {
    echo "Vous n'avez pas les droits.";
}

    ?>


    </body>
    </html>