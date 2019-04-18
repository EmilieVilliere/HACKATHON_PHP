<?php

function display($var) {
    echo '<pre>';
    echo var_dump($var);
    echo '</pre>';
}

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "easter_eggs_hackaton";
try {
    $BDD = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$user,$pass);
} catch (PDOException $e) {
    die('Connexion à la BDD échouée : ' . $e->getMessage());
}
$requestEgg = "SELECT name,image,power FROM egg ORDER BY RAND() LIMIT 3;";
$reponseEgg = $BDD->prepare($requestEgg);
$reponseEgg->execute();
$dataEgg = $reponseEgg->fetch();

display($dataEgg);

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
<div class="card-deck">
    <div class="card">
        <img  src=<?php echo $dataEgg[0]['image']; ?> alt=<?php echo $dataEgg[0]['name']; ?>>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src=<?php echo $dataEgg[1]['image']; ?> alt=<?php echo $dataEgg[1]['name']; ?>>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src=<?php echo $dataEgg[2]['image']; ?> alt=<?php echo $dataEgg[1]['name']; ?>>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
        </div>
    </div>
</div>
</body>
</html>

