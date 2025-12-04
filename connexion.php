<?php

// Connexion à ma base  de donnée eval-smdsi avec PDO

$host     = 'localhost';
$dbname   = 'eval-smdsi';
$username = 'root';
$password = '';

try {
  $pdo = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
    $username,
    $password,
    [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // erreurs en exceptions
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch en tableau associatif
      PDO::ATTR_EMULATE_PREPARES   => false,                  // meilleures requêtes préparées
    ]
  );
  // echo 'Connexion réussie';
} catch (PDOException $e) {
  die('Erreur de connexion : ' . $e->getMessage());
}
