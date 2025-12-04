// page = .../? de l'url
const page = window.location.search;

const notif = document.querySelector(".submit-notif");

// Je dis que si dans l'url, il y a ?success=1 qui est ma valeur de mon url quand un item est arrivé dans ma table, on affiche ce message
if (page === "?success=1") {
  notif.classList.remove("hidden");
}
