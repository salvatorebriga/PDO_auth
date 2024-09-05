<?php

session_start();
session_destroy(); // Distrugge tutte le sessioni
header("Location: index.php"); // Reindirizza alla pagina di login
exit;
