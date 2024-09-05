<?php

require 'db.php'; // Importa la connessione al database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ottieni username e password dal form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Preparazione della query per trovare l'utente
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Verifica se l'utente esiste
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Verifica se la password è corretta
        if (password_verify($password, $user['password'])) {
            echo "Login effettuato con successo!";
            // Puoi avviare una sessione o reindirizzare a una pagina protetta
            session_start();
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
        } else {
            echo "Password non corretta.";
        }
    } else {
        echo "Utente non trovato.";
    }
}
