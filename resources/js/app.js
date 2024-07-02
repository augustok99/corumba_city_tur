// abrir e fechar menu perfil
document.addEventListener('DOMContentLoaded', function () {
  // Alternar menu móvel
  document.querySelector('[aria-controls="mobile-menu"]').addEventListener('click', function () {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
  });

  // Alternar menu do usuário
  document.getElementById('user-menu-button').addEventListener('click', function () {
    const userMenu = document.getElementById('user-menu');
    userMenu.classList.toggle('hidden');
  });
});

// carrousel
import { Carousel } from 'flowbite';
document.addEventListener('DOMContentLoaded', function () {

  const carouselElement = document.getElementById('carousel-example');

  const items = [
    { position: 0, el: document.getElementById('carousel-item-1') },
    { position: 1, el: document.getElementById('carousel-item-2') },
    { position: 2, el: document.getElementById('carousel-item-3') },
    { position: 3, el: document.getElementById('carousel-item-4') },
  ];
  const options = {
    interval: 3000,
    indicators: {
      activeClasses: 'bg-white dark:bg-white',
      inactiveClasses:
        'bg-white hover:bg-white',
      items: [
        { position: 0, el: document.getElementById('carousel-indicator-1') },
        { position: 1, el: document.getElementById('carousel-indicator-2') },
        { position: 2, el: document.getElementById('carousel-indicator-3') },
        { position: 3, el: document.getElementById('carousel-indicator-4') },
      ],
    },
  };


  const instanceOptions = {
    id: 'carousel-example',
    override: true,
  };

  const carousel = new Carousel(carouselElement, items, options, instanceOptions);


  carousel.init()
});
