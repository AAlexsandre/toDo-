<?php
require_once "db.php";

$reponse = $pdo->query('SELECT password FROM `users` WHERE id = 1');
$reponse = $reponse->fetch();

//remaque que le 9 dans la db fonctionne  est c'est bien
if(password_verify("123456",$reponse['password'])){
    echo 'magnifique';
} else {
    echo "bah voilà quoi";
}


?>