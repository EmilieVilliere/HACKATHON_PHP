<?php

session_start();
if(isset($_GET['name'])) {
    $name = urldecode($_GET['name']);
    $_SESSION['name'] = $name;
}
if(isset($_GET['skills'])) {
    $skill = urldecode($_GET['skills']);
    $_SESSION['skills'] = $skill;
}

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?>

SUCCESS