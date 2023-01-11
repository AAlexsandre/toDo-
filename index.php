<?php
session_start();
if(!isset($_SESSION['connected'])){
    header('Location: reception.html');
}

require_once('db.php');

$sql = 'SELECT * FROM users WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_SESSION['connected']]);
$reponse = $stmt->fetch();
$name = $reponse['nickname'];


$sql = 'SELECT *  FROM tasks WHERE userid = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $_SESSION['connected']]);
$reponse = $stmt->fetchAll();


$js = 'localStorage.clear();';
foreach($reponse as $task){
    $js .= 'localStorage.setItem('.$task['id'].', "'.$task['name'].'");';
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST <?php echo $name;?></title>
    <link rel="stylesheet" href="css/toDoList.css">
</head>

<body>

    <div  id="toDoList">
        <h1>TO DO LIST de <?php echo $name;?></h1>
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

    <script><?php echo $js;?></script>
    <script src="js/toDoList.js"></script>
</body>
</html>

