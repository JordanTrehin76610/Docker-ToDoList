<?php

require_once'assets/classes/task.php';

session_start();

if(!isset($_SESSION['task'])) {
    $_SESSION['task'] = [];
}

if (isset($_GET['action'])) { //on regarde donc si il y a un paramètre, isset permet d'esquiver l'erreur si il n'y a rien
    $action = $_GET['action'];
}

if (isset($_GET['id'])) { //on regarde donc si il y a un paramètre, isset permet d'esquiver l'erreur si il n'y a rien
    $id = $_GET['id'];
}

if ($action == "add") { //Rajoute des taches
    $title = $_SESSION['titre'];
    $_SESSION['task'][] = new task($title, false);
    header('Location: todo.php');
    exit();
} else if ($action == "toggle" && isset($_GET['id'])) { //Change le status
    $_SESSION['task'][$id] -> toggle();
    header('Location: todo.php');
    exit();
} else if ($action == "delete" && isset($_GET['id'])) { //Supprime des taches
    unset($_SESSION['task'][$id]);
    header('Location: todo.php');
    exit();
}

?>