<?php

require_once('db.php');
$sql = 'INSERT INTO `users` (`email`, `nickname`, `password`) VALUES (:email, :nickname, :password)';

$stmt = $pdo->prepare($sql);

$inserted = $stmt->execute([
    'email' => $_POST['email'],
    'nickname' => $_POST['nickname'],
    'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
    ]);

    header('location: index.php');
?>