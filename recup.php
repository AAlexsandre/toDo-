<?php
require_once "db.php";
$nom = $_POST['password'];

$reponse = $pdo->query('SELECT password FROM `users` WHERE id = 6');
$reponse = $reponse->fetch();
if(password_verify($nom,$reponse['password'])){
    echo "test";
} else {
    echo "mdp false";
}

echo($nom);
echo($reponse['password']);
?>