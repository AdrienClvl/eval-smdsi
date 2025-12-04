<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <title>Evalutation SMDSI - Adrien Clavreul</title>
</head>

<body>
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
      <form action="inscription.php">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" />

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" />

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" />

        <button type="submit">Validez</button>

        <p class="hidden">Votre demande est bien envoyée !</p>
      </form>
    </section>
  </main>

  <footer>
    <p>Page web faite par <span>Adrien Clavreul</span> venant de la base de données Php</p>
  </footer>

  <script src="./main.js"></script>
</body>

</html>