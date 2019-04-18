<?php
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
$reponseEgg = $this->BDD->prepare($requestEgg);
$reponseEgg->execute();
$dataEgg = $reponseEgg->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="card-deck">
    <div class="card">
        <img src=<?php echo $dataEgg[0]['image']; ?> class="card-img-top" alt=<?php echo $dataEgg[0]['name']; ?>>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
        </div>
    </div>
    <div class="card">
        <img src=<?php echo $dataEgg[1]['image']; ?> class="card-img-top" alt=<?php echo $dataEgg[1]['name']; ?>>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
        </div>
    </div>
    <div class="card">
        <img src=<?php echo $dataEgg[2]['image']; ?> class="card-img-top" alt=<?php echo $dataEgg[1]['name']; ?>>
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
        </div>
    </div>
</div>
</body>
</html>

