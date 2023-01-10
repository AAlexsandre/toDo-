<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <div>
    <form method="POST" action="insert.php" class=" border border-success border-2 rounded m-3 p-3">Formulaire d'inscription
            <div>        
                <label for="email" class="form-label">EMAIL</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div>        
                <label for="nickname" class="form-label">NICKNAME</label>
                <input type="text" id="inscriptionNickname" name="nickname" class="form-control" required>
            </div>
            <div>
                <label for="password" class="form-label">PASSWORD</label>
                <input type="password" id="inscriptionPassword" name="password" class="form-control" required>
            </div>
            <button class="btn btn-success mt-2">to send</button>
        </form>

    <form method="POST" action="recup.php" class=" border border-success border-2 rounded m-3 p-3">Formulaire de connection
            <div>        
                <label for="nickname" class="form-label">NICKNAME</label>
                <input type="text" id="connectionNickname" name="nickname" class="form-control" required>
            </div>
            <div>
                <label for="password" class="form-label">PASSWORD</label>
                <input type="password" id="connectionPassword" name="password" class="form-control" required>
            </div>

            <button class="btn btn-success mt-2">to send</button>
    </form>
    </div>    
</body>
</html>

<?php
require_once "db.php";

$reponse = $pdo->query('SELECT password FROM `users` WHERE id = 6');
$reponse = $reponse->fetch();
var_dump($reponse['password']);
?>


<!-- <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <link rel="stylesheet" href="css/toDoList.css">
</head>

<body>

    <div  id="toDoList">
        <h1>TO DO LIST</h1>
        <form id="newTask">
            <input type="hidden" name="lastKey" id="lastKey">
            <input type="text" placeholder="the sentences" id="text">
            <button id="button">add</button>
        </form>

        <ul id="listNotDone"></ul>
        <ul id="listDone"></ul>

        <form id="editForm">
            <div>
                <input type="text" placeholder="the sentences" id="editContent">
                <input type="hidden" id="editId">
                <button id="editSubmit">OK</button>
            </div>
        </form>
    </div>

    <script src="js/toDoList.js"></script>
</body>
</html> -->