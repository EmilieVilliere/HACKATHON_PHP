<?php
session_start();

function display($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

$host = "localhost";
$user = "root";
$pass = "lOMELANGEE0803";
$dbname = "easter_eggs_hackaton";
try {
    $BDD = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$user,$pass);
} catch (PDOException $e) {
    die('Connexion à la BDD échouée : ' . $e->getMessage());
}
$requestEgg = "SELECT name,image,power FROM egg ORDER BY RAND() LIMIT 3;";
$reponseEgg = $BDD->prepare($requestEgg);
$reponseEgg->execute();
$dataEgg = $reponseEgg->fetchAll();

if(isset($_GET['power'])) {
    $power = $_GET['power'];
    $_SESSION['2'] = $power;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="card-deck">
        <a class="card" href=<?= "final.php?power=".$dataEgg[0]['power']; ?> >
            <img class="card-img-top" src="<?= $dataEgg[0]['image']; ?>" alt="<?php echo $dataEgg[0]['name']; ?>" >
            <div class="card-body">
                <h5 class="card-title"><?= $dataEgg[0]['name']; ?></h5>
            </div>
        </a>
        <a class="card" href=<?= "final.php?power=".$dataEgg[1]['power']; ?> >
            <img class="card-img-top" src="<?= $dataEgg[1]['image']; ?>" alt="<?php echo $dataEgg[1]['name']; ?>" >
            <div class="card-body">
                <h5 class="card-title"><?= $dataEgg[1]['name']; ?></h5>
            </div>
        </a>
        <a class="card" href=<?= "final.php?power=".$dataEgg[2]['power']; ?> >
            <img class="card-img-top" src=<?= $dataEgg[2]['image']; ?> alt=<?php echo $dataEgg[1]['name']; ?> >
            <div class="card-body">
                <h5 class="card-title"><?= $dataEgg[2]['name']; ?></h5>
            </div>
        </a>
    </div>
</div>
<div>
    <p>Tu as déja le pouvoir de <?= $_SESSION['power1'] ?></p>
    <p>Tu as obtenu : <?= $power ?></p>
</div>
</body>
</html>


