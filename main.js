document.querySelector("form").addEventListener("submit", function (event) {
  const nomInput = document.getElementById("nom");
  const nom = nomInput.value.trim();
  const regex = /[a-zA-ZÀ-ÿ '-]{2,}/;
  const error = document.getElementById("error-p");

  // Cacher l'erreur précédente au début
  if (error) error.hidden = true;

  if (!regex.test(nom)) {
    if (error) {
      error.style.display = "block"; // Afficher l'erreur
    } else {
      error.style.display = "hidden";
    }
    nomInput.focus();
    event.preventDefault();
    return false; // Sécurité supplémentaire
  }
});
