<?php
$error = array();
if ($_POST){
    if ($_POST['contact']!='badass' and $_POST['message']!='badass'){
        $error['contact1'] = "a";
    }
    if (count($error)==0){
        header("location:success.php");
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
  <title>footer</title>
  <link rel="stylesheet" href="style.css">
</head>
    <body>
        <footer>
                <div class="oeuf">
                    <span class= "contenu">
                        <img src=<?php echo $resultat[0]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">    
                        <img src=<?php echo $resultat[1]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[2]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[3]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[4]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[5]["image"]; ?>alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[6]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[7]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">           
                        <img src=<?php echo $resultat[8]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[9]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[10]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[11]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[12]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[13]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">                   
                        <img src=<?php echo $resultat[14]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[15]["image"]; ?>alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[16]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[17]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[18]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[19]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[20]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[21]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[22]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[23]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[24]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[25]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[26]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[27]["image"]; ?> alt='BADASS'>
                    </span>
                    <span class= "contenu">
                        <img src=<?php echo $resultat[27]["image"]; ?>alt='BADASS'>
                    </span>
            </div>
            <div style = "text-align: center;">
                <form action="footer.php" method="post" >
                    <label for="name"></label>
                    <input type="text"required id="name" name="contact">
                    <br>
                    <label for="msg">contactez-nous </label>
                    <br>
                    <textarea id="msg" name="message"></textarea>
                    <div class="button">
                        <button type="submit">Envoyer le message</button>
                    </div>
                </form>
            </div>
        </footer>
    </body>
</html>