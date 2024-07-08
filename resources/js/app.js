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

// smooth animation
document.addEventListener("DOMContentLoaded", function () {
  // Seleciona todos os links de navegação com a classe 'nav_link'
  const navLinks = document.querySelectorAll(".nav_link");

  navLinks.forEach(function (navLink) {
    navLink.addEventListener("click", function (event) {
      event.preventDefault(); // Impede o comportamento padrão do link
      console.log("Link clicked:", this);

      const targetId = this.getAttribute("href");
      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        console.log("Target element found:", targetElement);
        // Calcula a altura da barra de navegação
        const navHeight = document.querySelector("header").offsetHeight;

        // Calcula a posição do início da seção considerando a altura da barra de navegação
        let targetPosition =
          targetElement.getBoundingClientRect().top + window.scrollY - navHeight;

        // Ajuste adicional para a seção de início para garantir que não haja espaço extra na rolagem suave
        if (targetId === "#inicio") {
          targetPosition -= 40; // ajuste de 40 pixels para garantir que o início seja corretamente exibido
        }

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });
      }
    });
  });

  // Seleciona o botão de menu e o menu
  const btn = document.querySelector("button[aria-controls='mobile-menu']");
  const menu = document.getElementById("mobile-menu");

  // Adiciona um evento de clique ao botão de menu para alternar a visibilidade do menu
  btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
});


