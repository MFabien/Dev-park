<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dev Park</title>
</head>
<body>


<h1>Bienvenu</h1>
<?php include'connexion.php';
include 'config.php';

$req = $dbconnexion->query(" SELECT titre FROM Langage");
foreach ($req as $utilisateur){
    echo '<br>'.$utilisateur['titre'].'<br>';
}

?>
</body>
</html>