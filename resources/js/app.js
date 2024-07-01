
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

// funçao carrousel
import { Carousel } from 'flowbite'; //precisa instalar esse modulo com npm install flowbite

document.addEventListener('DOMContentLoaded', function () {
  const carouselElement = document.getElementById('carousel-example');
  const items = [
    {
      position: 0,
      el: document.getElementById('carousel-item-1'),
    },
    {
      position: 1,
      el: document.getElementById('carousel-item-2'),
    },
    {
      position: 2,
      el: document.getElementById('carousel-item-3'),
    },
    {
      position: 3,
      el: document.getElementById('carousel-item-4'),
    },
  ];

  // Opções padrão
  const options = {
    defaultPosition: 0, // Posição inicial do slide
    interval: 3000, // Intervalo entre slides em milissegundos
  };


  // Opções da instância
  const instanceOptions = {
    id: 'carousel-example',
    override: true, // Substitui a instância existente se já houver
  };

  // Criando o objeto Carousel
  const carousel = new Carousel(carouselElement, items, options, instanceOptions);

  // Exemplos de uso dos métodos
  carousel.next(); // Avança para o próximo slide
  carousel.prev(); // Retrocede para o slide anterior
  carousel.slideTo(2); // Vai para o slide na posição 2
  carousel.cycle(); // Inicia o ciclo automático
  carousel.pause(); // Pausa o ciclo automático

  // Exemplos de uso dos métodos de callback
  carousel.updateOnNext(() => {
    console.log('Atualização: próximo slide');
  });

  carousel.updateOnPrev(() => {
    console.log('Atualização: slide anterior');
  });

  carousel.updateOnChange(() => {
    console.log('Atualização: slide alterado');
  });
});