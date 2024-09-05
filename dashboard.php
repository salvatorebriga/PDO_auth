<?php

session_start();

if (!isset($_SESSION['username'])) {
    // Se l'utente non è loggato, reindirizzalo alla pagina di login
    header("Location: login.php");
    exit;
}

echo "Benvenuto, " . $_SESSION['username'] . "!";
?>

<a href="logout.php">Logout</a>