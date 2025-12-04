<?php
require 'connexion.php';

$nom = trim($_POST['nom'] ?? '');
$prenom = trim($_POST['prenom'] ?? '');
$email = trim($_POST['email'] ?? '');

// Vérifier les champs vides
if ($nom === '' || $prenom === '' || $email === '') {
  header('Location: index.php?error=champs_vides');
  exit;
}

try {
  $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email) VALUES (:nom, :prenom, :email)");
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':prenom', $prenom);
  $stmt->bindParam(':email', $email);
  $stmt->execute();

  header('Location: index.php?success=1');
  exit;
} catch (PDOException $e) {
  error_log("Erreur inscription.php : " . $e->getMessage() . " Code: " . $e->getCode());

  if ($e->getCode() === '23000') {
    header('Location: index.php?error=email_existant');
  } else {
    header('Location: index.php?error=erreur');
  }
  exit;
}
