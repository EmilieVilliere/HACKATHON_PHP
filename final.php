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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="" class="card-img-top" alt="unPerso">
            <div class="card-body">
                <img src=<?= $_SESSION["img"] ?> alt=<?= $_SESSION['name']; ?>>
                <p class="card-text"><?= $_SESSION['name']; ?></p>
                <p class="card-text"><?= $_SESSION['skills']; ?></p>
                <p class="card-text"><?= $_SESSION['power1']; ?></p>
                <p class="card-text"><?= $_SESSION['power2']; ?></p>
                <p class="card-text"><?= $_SESSION['power3']; ?></p>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>