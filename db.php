<?php
// db.php

$host = 'localhost';
$dbname = 'login_system';
$user = 'root';
$pass = 'root'; // Inserisci la tua password per il database MySQL

try {
    // Creazione di una connessione PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // Imposta l'errore PDO come eccezione
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}
