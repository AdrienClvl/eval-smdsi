<?php

require 'connexion.php';

// Récupère les données de la base de donnée
$stmt = $pdo->prepare("SELECT nom, prenom, email, created_at FROM users ORDER BY created_at DESC");
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
$users = [];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <title>Evalutation SMDSI - Adrien Clavreul</title>
</head>

<body>

  <?php
  $error = $_GET['error'] ?? '';
  ?>

  <header>
    <nav>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Contactez-moi</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <img src="https://picsum.photos/400/300" alt="#" />
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
        laudantium at consequuntur atque ipsum inventore exercitationem, quia,
        error, doloribus dolorem quas! Laudantium architecto repellat,
        temporibus ipsa veniam cumque? Ut, nulla!
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
        laudantium at consequuntur atque ipsum inventore exercitationem, quia,
        error, doloribus dolorem quas! Laudantium architecto repellat,
        temporibus ipsa veniam cumque? Ut, nulla!
      </p>
    </section>
    <section>
      <form action="inscription.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required />

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required />

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required />

        <button type="submit">Validez</button>

        <p class="error-p hidden">Votre demande est bien envoyée !</p>
      </form>
    </section>
  </main>

  <footer>
    <p>Page web faite par <span><?php ($users['nom']) || 'Nom' ?> <?php ($users['prenom']) || 'Prénom' ?></span> venant de la base de données Php</p>
  </footer>

  <script src="./main.js"></script>
</body>

</html>