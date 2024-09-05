<?php
// register.php

require 'db.php'; // Connessione al database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ottieni username e password dal form di registrazione
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Controlla se l'utente esiste già
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->fetch()) {
        // Se esiste già
        echo "Username già in uso.";
    } else {
        // Cripta la password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Inserisci il nuovo utente nel database
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);

        if ($stmt->execute()) {
            echo "Registrazione avvenuta con successo!";
            // Puoi redirigere l'utente al login o al dashboard
            header("Location: index.php"); // Reindirizza alla pagina di login
        } else {
            echo "Errore durante la registrazione.";
        }
    }
}
