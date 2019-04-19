<?php

session_start();

$connection = new PDO("mysql:dbname=easter_eggs_hackaton;host=localhost", "root", "123");
$requete ="SELECT name, image, skills FROM characters ORDER BY RAND() LIMIT 9;";
$charactersInfo = $connection->query($requete);
$resultat = $charactersInfo->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
        <title>RPGEGGS</title>
         <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <html>
    <body>

        <div class="container mb-5">
            <h3> Veuillez choisir un personnage</h3>
    <!-- Les cards de nos oeufs apparaissent ici -->
            <div class="row m-auto d-inline-flex">
                <div class="col mb-5">
                    <a href=<?= "oeuf.php?name=".urlencode($resultat[0]['name'])."&skills=".urlencode($resultat[0]['skills'])."&img=".urlencode($resultat[0]["image"]) ?> class="card">
                        <div class="card">
                            <img src=<?php echo $resultat[0]["image"]; ?>>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $resultat[0]["name"]; ?></h4>
                                <p class="card-description"><?php echo $resultat[0]["skills"]; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-5">
                    <a href=<?= "oeuf.php?name=".urlencode($resultat[1]['name'])."&skills=".urlencode($resultat[1]['skills'])."&img=".urlencode($resultat[1]["image"]) ?> class="card">
                        <div class="card">
                            <img src=<?php echo $resultat[1]["image"]; ?>>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $resultat[1]["name"]; ?></h4>
                                <p class="card-description"><?php echo $resultat[1]["skills"]; ?></p>
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="col mb-5">
                    <a href=<?= "oeuf.php?name=".urlencode($resultat[2]['name'])."&skills=".urlencode($resultat[2]['skills'])."&img=".urlencode($resultat[2]["image"]) ?> class="card">
                        <div class="card">
                            <img src=<?php echo $resultat[2]["image"]; ?>>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $resultat[2]["name"]; ?></h4>
                                <p class="card-description"><?php echo $resultat[2]["skills"]; ?></p>
                            </div>
                        </div>
                    </a> 
                </div>
            </div>
            <div class="row d-inline-flex">
                <div class="col mb-5">
                    <a href=<?= "oeuf.php?name=".urlencode($resultat[3]['name'])."&skills=".urlencode($resultat[3]['skills'])."&img=".urlencode($resultat[3]["image"]) ?> class="card">
                        <div class="card">
                            <img src=<?php echo $resultat[3]["image"]; ?>>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $resultat[3]["name"]; ?></h4>
                                <p class="card-description"><?php echo $resultat[3]["skills"]; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-5">
                    <a href=<?= "oeuf.php?name=".urlencode($resultat[4]['name'])."&skills=".urlencode($resultat[4]['skills'])."&img=".urlencode($resultat[4]["image"]) ?> class="card">
                        <div class="card">
                            <img src=<?php echo $resultat[4]["image"]; ?>>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $resultat[4]["name"]; ?></h4>
                                <p class="card-description"><?php echo $resultat[4]["skills"]; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-5">
                    <a href=<?= "oeuf.php?name=".urlencode($resultat[5]['name'])."&skills=".urlencode($resultat[5]['skills'])."&img=".urlencode($resultat[5]["image"]) ?> class="card">
                        <div class="card">
                            <img src=<?php echo $resultat[5]["image"]; ?>>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $resultat[5]["name"]; ?></h4>
                                <p class="card-description"><?php echo $resultat[5]["skills"]; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row d-inline-flex">
                <div class="col mb-5">
                    <a href=<?= "oeuf.php?name=".urlencode($resultat[6]['name'])."&skills=".urlencode($resultat[6]['skills'])."&img=".urlencode($resultat[6]["image"]) ?> class="card">
                        <div class="card">
                            <img src=<?php echo $resultat[6]["image"]; ?>>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $resultat[6]["name"]; ?></h4>
                                <p class="card-description"><?php echo $resultat[6]["skills"]; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-5">
                    <a href=<?= "oeuf.php?name=".urlencode($resultat[7]['name'])."&skills=".urlencode($resultat[7]['skills'])."&img=".urlencode($resultat[7]["image"]) ?> class="card">
                        <div class="card">
                            <img src=<?php echo $resultat[7]["image"]; ?>>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $resultat[7]["name"]; ?></h4>
                                <p class="card-description"><?php echo $resultat[7]["skills"]; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-5">
                    <a href=<?= "oeuf.php?name=".urlencode($resultat[8]['name'])."&skills=".urlencode($resultat[8]['skills'])."&img=".urlencode($resultat[8]["image"]) ?> class="card">
                        <div class="card">
                            <img src=<?php echo $resultat[8]["image"]; ?>>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $resultat[8]["name"]; ?></h4>
                                <p class="card-description"><?php echo $resultat[8]["skills"]; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>

    <?php include 'footer.php'; ?>
</html>

<!-- Appel du Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>