// Menu mobile
const menuIcon = document.querySelector("#btn_burger_check");
const navMenu = document.querySelector(".menu-header_mobile");
const menuLinksSmartphone = document.querySelectorAll(".menu-header_mobile a");

let isMenuOpen = false;

anime({
  targets: ".menu-header_mobile",
  translateY: -50,
  opacity: 0,
});

menuIcon.addEventListener("click", function (event) {
  event.stopPropagation(); // Empêche la propagation de l'événement de clic
  toggleMenu();
});

document.addEventListener("click", (event) => {
  // Fermez le menu si l'élément cliqué est à l'extérieur
  if (!navMenu.contains(event.target)) {
    closeMenu();
  }
});

// Ajouter un gestionnaire d'événement de clic à chaque lien du menu
menuLinksSmartphone.forEach((link) => {
  link.addEventListener("click", () => {
    // Fermer le menu en cliquant sur un lien
    closeMenu();
  });
});

// Ajouter un gestionnaire d'événement de défilement à la fenêtre
window.addEventListener("scroll", () => {
  if (isMenuOpen) {
    closeMenu();
    isMenuOpen = false;
  }
});

function toggleMenu() {
  isMenuOpen = !isMenuOpen;

  if (isMenuOpen) {
    openMenu();
  } else {
    closeMenu();
  }
}

function openMenu() {
  navMenu.classList.remove("hidden");
  menuIcon.classList.add("is-active");
  anime({
    targets: ".menu-header_mobile",
    translateY: 0,
    opacity: 1,
  });
  anime({
    targets: ".background-header_mobile",
    height: "14.5rem",
  });
}

function closeMenu() {
  isMenuOpen = false;
  navMenu.classList.add("hidden");
  menuIcon.classList.remove("is-active");
  anime({
    targets: ".menu-header_mobile",
    translateY: -50,
    opacity: 0,
  });
  anime({
    targets: ".background-header_mobile",
    height: "4.75rem",
  });
}
