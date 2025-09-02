<?php

require_once'assets/classes/task.php';

session_start();

if(!isset($_SESSION['task'])) {
    $_SESSION['tasks'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST['titre'])) {
        $erreur = "Veuillez ajouter une tâche";
    }

    if(empty($erreur)){
        $_SESSION['titre'] = $_POST['titre'];
        header("Location: src/action.php?action=add");
    }
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
    <link rel="stylesheet" href="src/assets/css/style.css">
</head>


<body class="corp">

    <div id="web">

        <p class="text-center fs-1 TitreWeb">RIP BOZO IL FAUT ETRE SUR MOBILE</p>

    </div>

    <div id="mobile">

        <h1 class="text-center my-5 Titre">La To-Do List</h1>


        <hr class="w-75 mx-auto">


        <form action="" method="post">
            <div class="text-center mt-5">
                <p class="text-center text-danger"><?= $erreur ?? "" ?></p>
                <input type="text" placeholder="Exemple: chercher le paing" id="titre" name="titre" class="w-75">
            </div>
            <div class="text-center mt-4 mb-5">
                <button type="submit" class="btn btn-primary">Ajouter la tâche</button>
            </div>
        </form>


        <hr class="w-75 mx-auto">


        <div class="my-5 text-center">
            <a href="src/todo.php"><button class="btn btn-primary">Voir la To-Do List</button></a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>


</html>