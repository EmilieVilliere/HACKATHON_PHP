<?php
session_start();

if(isset($_GET['power'])) {
    $power = urldecode($_GET['power']);
    $_SESSION['power3'] = $power;
}
?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>RPGEGGS !</title>
    </head>
    <body>
        <?php include 'headBar.php' ?>
        <h1 class="text-center mb-5">Voici ton personnage TROP BADASS !</h1>
            <div class="container">
                <div class="text-center">
                    <img src=<?= $_SESSION["img"] ?> alt=<?= $_SESSION['name']; ?>>
                    <p class="card-text mt-5 gras"><?= $_SESSION['name']; ?></p>
                    <p class="card-text mcdo"><?= $_SESSION['skills']; ?></p>
                    <p class="card-text mcdo"><?= $_SESSION['power1']; ?></p>
                    <p class="card-text mcdo"><?= $_SESSION['power2']; ?></p>
                    <p class="card-text mcdo"><?= $_SESSION['power3']; ?></p>
                </div>
            </div>
        <?php include 'footer.php' ?>
    </body>
    </html>