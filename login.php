<?php
session_start();

require_once('db.php');
$stmt = $pdo->prepare('SELECT * FROM users WHERE nickname = :nickname');
$stmt->execute(['nickname' => $_POST['nickname']]);
$reponse = $stmt->fetch();



if(password_verify($_POST['password'],$reponse['password'])){
    $_SESSION['connected'] = $reponse['id'];
    header('Location: index.php');
}
else{
    header('Location: reception.html');
}


?>
