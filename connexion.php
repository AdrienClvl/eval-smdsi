<?php
// Connexion à la base de données eval-smdsi avec PDO

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
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ]
  );
  // echo 'Connexion réussie';
} catch (PDOException $e) {
  die('Erreur de connexion : ' . $e->getMessage());
}
