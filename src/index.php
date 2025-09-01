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
    <link rel="stylesheet" href="assets/css/style.css">
</head>


<body class="corp">

        <h1 class="text-center my-5 Titre">La To-Do List</h1>


        <hr class="w-75 mx-auto">


        <form action="action.php?action=add" method="post">
            <div class="text-center my-5">
                <input type="text" placeholder="Exemple: chercher le paing" id="titre" name="titre" class="w-50">
            </div>
            <div class="text-center my-5">
                <button type="submit" class="btn btn-primary">Ajouter la tâche</button>
            </div>
        </form>


        <hr class="w-75 mx-auto">


        <div class="my-5 text-center">
            <a href="todo.php"><button class="btn btn-primary">Voir la To-Do List</button></a>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>


</html>