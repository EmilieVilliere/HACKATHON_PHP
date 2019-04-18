<?php

$connection = new PDO("mysql:dbname=easter_eggs_hackaton;host=localhost", "root", "lOMELANGEE0803");
$requete ="SELECT name, image, skills FROM characters ORDER BY RAND() LIMIT 7;";
$charactersInfo = $connection->query($requete);
$resultat = $charactersInfo->fetchAll();
echo "<pre>";
var_dump($resultat);
echo "</pre>";


?>

<!DOCTYPE html>
    <html lang="fr">
        <head>
        <meta charset="utf-8">
            <title>RPGEGGS</title>
            <link rel="stylesheet" href="stylesheet.css">
        </head>
        <html>
        <body>

        <!-- Les cards de nos oeufs apparaissent ici -->
            <div class="card-columns">
            <div class="card">
                <div class="card-body">
                <img src=<?php echo $resultat[0]["image"]; ?>>
                <h4 class="card-title"><?php echo $resultat[0]["name"]; ?></h4>
                <p class="card-description"><?php echo $resultat[0]["skills"]; ?></p>
                <!-- Card content -->
                </div>
            </div>
            <div class="card p-3">
            <img src=<?php echo $resultat[1]["image"]; ?>>
                <h4 class="card-title"><?php echo $resultat[1]["name"]; ?></h4>
                <!-- Card content -->
            </div>
            <div class="card">
                <div class="card-body">
                <img src=<?php echo $resultat[2]["image"]; ?>>
                <h4 class="card-title"><?php echo $resultat[2]["name"]; ?></h4>
                <!-- Card content -->
                </div>
            </div>
            <div class="card p-3">
            <img src=<?php echo $resultat[3]["image"]; ?>>
                <h4 class="card-title"><?php echo $resultat[3]["name"]; ?></h4>
                <!-- Card content -->
            </div>
            <div class="card">
                <div class="card-body">
                <img src=<?php echo $resultat[4]["image"]; ?>>
                <h4 class="card-title"><?php echo $resultat[4]["name"]; ?></h4>
                <!-- Card content -->
                </div>
            </div>
            <div class="card p-3">
            <img src=<?php echo $resultat[5]["image"]; ?>>
                <h4 class="card-title"><?php echo $resultat[5]["name"]; ?></h4>
                <!-- Card content -->
            </div>
            <div class="card">
                <div class="card-body">
                <img src=<?php echo $resultat[6]["image"]; ?>>
                <h4 class="card-title"><?php echo $resultat[6]["name"]; ?></h4>
                <!-- Card content -->
                </div>
            </div>
            <div class="card p-3">
            <img src=<?php echo $resultat[7]["image"]; ?>>
                <h4 class="card-title"><?php echo $resultat[7]["name"]; ?></h4>
                <!-- Card content -->
            </div>
            </div>
        </html>
        </body>

<!-- Appel du Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>