document.addEventListener('DOMContentLoaded', function () {
  // Elementos do DOM
  const mobileMenu = document.getElementById('mobile-menu');
  const userMenuButton = document.getElementById('user-menu-button');
  const userMenu = document.getElementById('user-menu');
  const menuButton = document.querySelector('[aria-controls="mobile-menu"]');

  // Função para alternar a visibilidade do menu móvel
  function toggleMobileMenu() {
    mobileMenu.classList.toggle('hidden');
  }

  // Evento para alternar o menu móvel
  menuButton.addEventListener('click', function (event) {
    toggleMobileMenu();
    event.stopPropagation(); // Previne que o clique no botão feche o menu imediatamente
  });

  // Evento para fechar o menu móvel ao clicar fora dele
  document.addEventListener('click', function (event) {
    if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
      mobileMenu.classList.add('hidden');
    }
  });

  // Função para alternar a visibilidade do menu do usuário
  function toggleUserMenu() {
    userMenu.classList.toggle('hidden');
  }

  // Evento para alternar o menu do usuário
  userMenuButton.addEventListener('click', function (event) {
    toggleUserMenu();
    event.stopPropagation(); // Previne que o clique no botão feche o menu imediatamente
  });

  // Evento para fechar o menu do usuário ao clicar fora dele
  document.addEventListener('click', function (event) {
    if (!userMenu.contains(event.target) && event.target !== userMenuButton) {
      userMenu.classList.add('hidden');
    }
  });
});


// carrousel functions
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

//animação smooth
// Seleciona todos os links de navegação com a classe 'nav_link'
const navLinks = document.querySelectorAll(".nav_link");

navLinks.forEach(function (navLink) {
  navLink.addEventListener("click", function (event) {
    event.preventDefault(); // Impede o comportamento padrão do link

    const targetId = this.getAttribute("id"); // Obtém o ID do alvo do link
    const currentUrl = window.location.pathname;

    // Verifica se o usuário está na rota /home ou /
    if (currentUrl === '/home' || currentUrl === '/') {
      // Verifica se o link clicado é para a mesma página e a animação é necessária
      if (targetId === "#home" || targetId === "#historias" || targetId === "#sobre") {
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
          // Calcula a altura da barra de navegação
          const navHeight = document.querySelector("header").offsetHeight;

          // Calcula a posição do início da seção considerando a altura da barra de navegação
          let targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - navHeight;

          // Ajuste adicional para a seção de início (home) para garantir que não haja espaço extra na rolagem suave
          if (targetId === "#home") {
            targetPosition -= 115; // ajuste de 115 pixels para garantir que o início seja corretamente exibido
          }

          window.scrollTo({
            top: targetPosition,
            behavior: "smooth",
          });
        }
      }
    } else {
      // Redireciona para a página /home se o usuário estiver em outra rota
      window.location.href = "/home";
    }
  });
});




// validacao ao usuario que imagem foi carregada
document.addEventListener('DOMContentLoaded', function () {
  const imageInput = document.getElementById('imageInput');


  imageInput.addEventListener('change', function () {
    if (imageInput.files && imageInput.files.length > 0) {
      taskList.classList.remove('hidden');
    }
    if (!imageInput.files || imageInput.files.length == 0) {
      taskList.classList.add('hidden');
    }
  });
});

//aplicar filtro na pagina de detalhes

$(document).ready(function () {
  $('.filter-link').click(function (e) {
    e.preventDefault();
    var filter = $(this).data('filter');

    $('.flex-wrap > .flex').each(function () {
      if (filter === 'all' || $(this).hasClass(filter)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });
});

//carregar mais items

document.addEventListener('DOMContentLoaded', function () {
  let visibleItems = 4; // Número inicial de itens visíveis
  const items = document.querySelectorAll('#place-item');
  const loadMoreButton = document.getElementById('loadMoreButton');

  // Função para atualizar a visibilidade dos itens e o estado do botão
  function updateVisibleItems() {
    items.forEach((item, index) => {
      if (index < visibleItems) {
        item.classList.remove('hidden');
      } else {
        item.classList.add('hidden');
      }
    });

    // Exibir ou ocultar o botão de "Carregar Mais" com base na visibilidade dos itens
    if (visibleItems >= items.length) {
      loadMoreButton.classList.add('hidden'); // Oculta o botão se não houver mais itens para mostrar
    } else {
      loadMoreButton.classList.remove('hidden'); // Mostra o botão se houver mais itens para mostrar
    }
  }

  // Atualiza a visibilidade dos itens iniciais ao carregar a página
  updateVisibleItems();

  // Evento de clique no botão "Carregar Mais"
  loadMoreButton.addEventListener('click', function () {
    visibleItems += 4; // Aumenta o número de itens visíveis ao clicar no botão
    updateVisibleItems(); // Atualiza a visibilidade dos itens
  });
});