<?php

if ($_POST){
    if ($_POST['message']=='BADASS'){
        header("location:easterEgg.php");
        exit();
    }
}

$dbh = new \PDO('mysql:host=localhost;dbname=easter_eggs_hackaton;charset=utf8', 'root', '123');
$requete = "SELECT image FROM egg LIMIT 29; ";
$reponse = $dbh->query($requete);
$resultat = $reponse->fetchAll();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
</head>
<body>
  <div style = "text-align: center;">
    <form action="success.php" method="post" >
        <textarea id="msg" name="message"></textarea>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>
</div>
</body>
</html>