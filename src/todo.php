<?php

require_once'assets/classes/task.php';

session_start();

if(!isset($_SESSION['task'])) {
    $_SESSION['tasks'] = [];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>


<body class="bg">

    <div class="etiquette my-3">
        <h1 class="text-center pt-2">Ma To-Do list</h1>
    </div>

    <div class="text-center">
        <a href="index.php"><button class="btn btn-primary mb-5">Ajouter une tâche</button></a>
    </div>

    <?php $tache = $_SESSION['task'];
    foreach($tache as $index => $task) { ?>
    <div class="justify-content-end d-flex postIt mx-auto w-75 px-1 py-2">
        <?php if ($task->getIsDone() == false) { ?>
        <p class="pt-2">-<?= $task->__toString(); ?></p>
        <?php $delete = "action.php?action=delete&id=" . $index;?>
        <?php $change = "action.php?action=toggle&id=" . $index;?>
        <a href="<?= $change ?>"><button class="btn btn-success mx-1"><i class="bi bi-check"></i></button></a>
        <a href="<?= $delete ?>"><button class="btn btn-dark mx-1"><i class="bi bi-trash-fill"></i></button></a>
        <?php } else { ?>
        <p class="pt-2 finis">-<?= $task->__toString(); ?></p>
        <?php $delete = "action.php?action=delete&id=" . $index;?>
        <?php $change = "action.php?action=toggle&id=" . $index;?>
        <a href="<?= $change ?>"><button class="btn btn-danger mx-1"><i class="bi bi-x-lg"></i></button></a>
        <a href="<?= $delete ?>"><button class="btn btn-dark mx-1"><i class="bi bi-trash-fill"></i></button></a>
        <?php } ?>
    </div>
    <?php } ?>

</body>



</html>