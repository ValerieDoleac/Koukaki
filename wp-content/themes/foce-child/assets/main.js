

// titres

document.addEventListener('scroll', () => {
  const titles = document.querySelectorAll('.section-title');

  titles.forEach((title) => {
    const titlePosition = title.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (titlePosition < windowHeight - 100) {
      title.classList.add('visible');
    } else {
      title.classList.remove('visible');
    }
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const logo = document.getElementById('logo');

  // Vérifiez si l'élément est bien là avant d'appliquer les modifications
  if (logo) {
      // Ajout d'un effet de flottement au chargement
      logo.classList.add('logo-floating');

      // Supprime l'effet au clic pour illustrer un événement
      logo.addEventListener('click', () => {
          logo.classList.toggle('logo-floating'); // Active/Désactive
      });
  }
});



// Parallax

document.addEventListener('DOMContentLoaded', function () {
  // Initialiser Skrollr sans condition sur la largeur de l'écran
  const s = skrollr.init({
    smoothScrolling: true, // Active le défilement fluide
    forceHeight: false,    // Désactive la hauteur forcée
  });

  console.log('Skrollr initialisé pour l\'effet de parallaxe sur tous les écrans !');
});



document.addEventListener("DOMContentLoaded", function () {
  var s = skrollr.init({
      smoothScrolling: true,
      forceHeight: false,
  });
});

// carousel

const swiper = new Swiper('.characters-swiper', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 3, // 3 slides visibles au centre
  coverflowEffect: {
    rotate: 70, // Angle de rotation des slides latérales
    stretch: 0, // Espacement entre les slides en profondeur
    depth: 100, // Profondeur 3D
    modifier: 1, // Intensité de l'effet
    slideShadows: false, // Ajout d'ombres
  },

});


// Menu burger

document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('menu-burger');
  const fullScreenMenu = document.getElementById('full-screen-menu');
  const menuItems = document.querySelectorAll('.menu-screen-title a'); // Liens du menu

  // Fonction pour gérer l'ouverture/fermeture du menu
  burger.addEventListener('click', () => {
    const isMenuVisible = fullScreenMenu.classList.contains('menu-visible');

    if (!isMenuVisible) {
      // Afficher le menu
      fullScreenMenu.classList.remove('menu-hidden');
      fullScreenMenu.classList.add('menu-visible');

      // Ajouter l'animation sur chaque titre
      menuItems.forEach((item, index) => {
        setTimeout(() => {
          item.parentElement.classList.add('visible'); // Parent <li>
        }, index * 100); // Décalage pour un effet de cascade
      });
    } else {
      // Cacher le menu
      closeMenu();
    }

    // Basculer la classe active sur le burger
    burger.classList.toggle('active', !isMenuVisible);
  });

  // Fonction pour fermer le menu
  function closeMenu() {
    fullScreenMenu.classList.remove('menu-visible');
    fullScreenMenu.classList.add('menu-hidden');

    // Supprimer la classe visible des titres
    menuItems.forEach((item) => {
      item.parentElement.classList.remove('visible'); // Parent <li>
    });

    // Retirer la classe active du burger
    burger.classList.remove('active');
  }

  // Ajouter l'événement pour fermer le menu quand on clique sur un lien

  menuItems.forEach((link) => {
    link.addEventListener('click', (e) => {
      e.preventDefault(); // Empêche le comportement par défaut
      const targetId = link.getAttribute('href'); // Récupère l'ID de la section
      const targetElement = document.querySelector(targetId); // Sélectionne la section cible

      if (targetElement) {
        // Faire défiler vers la section correspondante
        targetElement.scrollIntoView({ behavior: 'smooth' });
      }

      // Fermer le menu
      closeMenu();
    });
  });
});














