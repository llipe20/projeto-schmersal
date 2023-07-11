<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Schmersal Hotel</title>
</head>
<!--Isso tudo aqui é as pequenas imagens ou algum botão que é puxado da libs de algum site ai-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

<!--O QUE FALTA
-Modificar imagens da tela inicial para colocar a letra branca e se tornar um padrão no site
-Colocar a parte do login, para assim que o usuário for escolher qual quarto ele ja faz logo o login ou registra
isso da pra colocar ao lado do contato, so dar uma afastada e colocar
-Talvez modificar algumas imagens mas ai depende de vocês se gostaram ou não.
-->
<body>

  <!--Cabeçalho do site-->
<header class="header" id="navegacao-menu">
  <div class="container">
    <nav>
      <a href="#" class="logo"><img src=imagem/hotel.png alt=""></a>

      <ul class="nav-menu">
        <li><a href="#inicio" class="nav-link">Inicio</a></li>  
        <li><a href="novaReserva/manutencao/quarto.php" class="nav-link">Nova Reserva</a></li>
        <li><a href="consulReserva/formularios/consulReserva.php" class="nav-link">Consultar</a> </li>
        <li><a href="#sobre" class="nav-link">Sobre</a> </li>
        <li><a href="#quartos" class="nav-link">Quartos</a> </li>
        <li><a href="#restaurante" class="nav-link">Restaurante</a> </li>
        <li><a href="#galeria" class="nav-link">Galeria</a> </li>

      </ul>

      <div class="hamburguer">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>


    
    </nav>
  </div>
</header>


<!--Parte inicial do Site-->
<section class="inicio" id="inicio">
  <div class="head_container">
    <div class="box">
      <div class="texto">
        <h2>Seja Bem Vindo</h2>
        <p> Bem-vindo ao Schmersal Hotel, um refúgio luxuoso com excelente comida, <br>
          vistas deslumbrantes das varandas e quartos confortáveis e de alta qualidade. 
          <br>Nosso restaurante, oferece pratos excepcionais, enquanto as varandas <br> proporcionam uma vista encantadora. <br>
          Nossos quartos são decorados com elegância e oferecem conforto supremo. <br>Desfrute de uma estadia inesquecível conosco!</p>
        <button>Mais informações</button>
      </div>
    </div>
<div class="imagem">
  <img src="imagem/vistahotel3.jpg" class="slide">
</div>
 <div class="imagem-item">
  <img src="imagem/vistahotel1.jpg" alt="" class="slide active" onclick="img('imagem/vistahotel1.jpg')">
  <img src="imagem/vistahotel4.jpg" alt="" class="slide " onclick="img('imagem/vistahotel4.jpg')">
  <img src="imagem/vistahotel3.jpg" alt="" class="slide " onclick="img('imagem/vistahotel3.jpg')">
  <img src="imagem/vistahotel2.jpg" alt="" class="slide " onclick="img('imagem/vistahotel2.jpg')">
</div>

</section>
<!---Livro de opções de hospedagem-->
<section class="book">
  <div class="container flex">
    <div class="input grid">
      <div class="box">
        <label>Inicio:</label>
        <input type="date" placeholder="Confirmar-Data">
      </div>
      <div class="box">
        <label>Fim:</label>
        <input type="date" placeholder="Confirmar-Data">
      </div>
      <div class="box">
        <label>Adultos:</label>
        <input type="number" placeholder="0">
      </div>
      <div class="box">
        <label>Crianças:</label>
        <input type="number" placeholder="0">
      </div>
    </div>
    <div class="search">
      <button type="submit" name="pesquisar">PESQUISAR</button>
    </div>
  </div>

</section>
<!--Funcionamento do Slide de imagem-->
<script>
function img(anything){
  document.querySelector('.slide').src = anything;
}

function change(change){
  const line = document.querySelector('.imagem');
  line.style.background = change;
}
</script>
<!--Sobre o Hotel-->
<section class="sobre top" id="sobre">
  <div class="container flex">
    <div class="left">
    <div class="img">
    <img src="imagem/a1.jpg" alt="" class="imagem1">
    <img src="imagem/a2.jpg" alt="" class="imagem2">
    </div>
  </div>
<div class="right">
  <div class="heading">
    <h5>LEVANDO PARA VOCÊ O CONFORTO DE ALTO NIVEL!</h5>
    <h2>Bem vindo ao Schmersal Hotel</h2>
    <p>Bem-vindo ao nosso hotel de luxo, onde você pode desfrutar de vistas deslumbrantes, conforto excepcional e refeições de alta qualidade.</p>
    <p> Descubra uma experiência única em um ambiente sofisticado e elegante, perfeito para os viajantes mais exigentes.</p>
    <button class="btn1">MAIS INFORMAÇÕES</button>

  </div>
</div>
</div>
</section>
<!--Serviços parte de baixo-->
<section class="serviços top">
  <div class="container">
    <div class="text">
      <h2>Nossos Serviços</h2>
      <p>Venha desfrutar dos incríveis serviços oferecidos pelo nosso hotel de primeira classe. Nós nos orgulhamos em proporcionar uma experiência única e completa para os nossos hóspedes. Aproveite ao máximo a sua estadia com os seguintes serviços disponíveis:</p>
<!---Serviços com os negocio do lado kk-->
      <div class="content">
        <div class="box flex">
        <i class="fas fa-swimming-pool"></i>
        <span>Piscina</span>
        </div>
        <div class="content">
          <div class="box flex">
          <i class="fas fa-dumbbell"></i>
          <span>Academia</span>
        </div>
        <div class="content">
          <div class="box flex">
            <i class="fas fa-spa"></i>
          <span>SPA</span>
        </div>
        <div class="content">
          <div class="box flex">
            <i class="fas fa-swimmer"></i>
          <span>Aula de natação</span>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Demonstração de Quartos e valores-->
<section class="quartos top" id="quartos">
  <div class="container">
    <div class="heading_top flex1">
      <div class="heading">
<h5>Quartos com o melhor conforto</h5>
<h2>Quartos & Suites</h2>
      </div>
      <!--Botão para ver todos os quartos-->
      <div class="button-Q">
        <button class="btn1">Ver todos</button>
      </div>
    </div>
    <!--Imagens dos Quartos com Valores-->
    <div class="content grid">
      <div class="box">
        <div>
          <div class="img">
            <img src="imagem/r1.jpg" alt="">
          </div>
          <div class="text">
            <h3>Quarto Superior</h3>
            <p><span>R$</span>200 <span>/Por noite</span></p>
          </div>
        </div>
      </div>
      
      <div class="box">
        <div class="img">
          <img src="imagem/r2.jpg" alt="">
        </div>
        <div class="text">
          <h3>Quarto Superior</h3>
          <p><span>R$</span>200 <span>Por noite</span></p>
        </div>
      </div>
      
      <div class="box">
        <div class="img">
          <img src="imagem/r3.jpg" alt="">
        </div>
        <div class="text">
          <h3>Quarto Superior</h3>
          <p><span>R$</span>200 <span>Por noite</span></p>
        </div>
      </div>
    </div>
  
    </div>
  </div>
</section>
<!--Feedback do Manel gomi-->
<section class="serviços serviços2 top">
  <div class="container">
    <div class="text">
      <div class="heading">
        <h5>Feedback</h5>
        <h2>O que as pessoas estão falando sobre nosso espaço!</h2>
      </div>
      <div class="para">
        <p>Este hotel é simplesmente incrível! A equipe é extremamente atenciosa e as instalações são deslumbrantes. Os quartos são luxuosos e oferecem uma vista espetacular. A comida é deliciosa e as comodidades, como a piscina, academia e spa, são excelentes. Uma experiência de hospedagem memorável e luxuosa!</p>
      
        <div class="box flex">
          <div class="img">
            <img src="imagem/manel.jpg" alt="">

          </div>
          <div class="name">
            <h5>MANOEL GOMES</h5>
            <h5>BRASIL</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Parte do restaurante-->
<section class="restaurante top" id="restaurante">
  <div class="container flex">
    <div class="left">
      <img src="imagem/re.jpg" alt="">
    </div>
    <div class="right">
      <div class="text">
        <h2>Nosso Restaurante</h2>
        <p> Bem-vindo ao Bistro Belle Vue, o restaurante exclusivo localizado no prestigiado Hotel Schmersal. Oferecemos uma experiência culinária excepcional, combinando sabores requintados com um ambiente elegante. Desfrute de pratos criativos preparados pelo nosso talentoso chef, com ingredientes frescos e sazonais. Com uma vista deslumbrante e um serviço impecável, o Bistro Belle Vue é o local perfeito para momentos especiais e refeições memoráveis.</p>
      </div>
      <!---Deixa em ingles mesmo, essas class é pra function funcionar-->
      <div class="accordionWrapper">
        <div class="accordionItem open">
          <h2 class="accordionIHeading">Risoto de Camarão com Aspargos Frescos</h2>
          <div class="accordionItemContent">
            <p>Um delicioso risoto cremoso preparado com arroz arbóreo, camarões suculentos e aspargos frescos crocantes. Cada garfada revela uma combinação perfeita de sabores, com o arroz cozido no ponto certo e o sabor marinho dos camarões contrastando com a leveza e o aroma dos aspargos. Uma opção sofisticada que agrada tanto aos paladares exigentes quanto aos amantes da culinária italiana.
            </p>
          </div>
        </div>
        <div class="accordionItem close">
          <h2 class="accordionIHeading">Filé Mignon ao Molho de Vinho Tinto</h2>
          <div class="accordionItemContent">
            <p>Uma suculenta peça de filé mignon grelhado, acompanhada por um rico molho de vinho tinto. A carne é preparada com maestria, atingindo o ponto perfeito de maciez e suculência. O molho encorpado, feito com vinho tinto selecionado, ervas aromáticas e especiarias, adiciona um sabor intenso e sofisticado ao prato. Acompanhado por uma seleção de legumes frescos e batatas douradas, este prato é uma verdadeira celebração dos sabores clássicos da alta gastronomia.
            </p>
          </div>
        </div>
        <div class="accordionItem close">
          <h2 class="accordionIHeading">Salada Mediterrânea com Queijo Feta</h2>
          <div class="accordionItemContent">
            <p>Uma refrescante salada inspirada na culinária mediterrânea, repleta de cores vibrantes e sabores autênticos. Esta salada apresenta uma mistura de alface crocante, tomates cereja suculentos, pepino fatiado, azeitonas kalamata e cebola roxa, tudo combinado harmoniosamente. O toque especial fica por conta do queijo feta, que adiciona uma textura cremosa e um sabor salgado irresistível. Regado com um leve molho de limão e azeite de oliva, esta salada é uma opção leve e saudável, perfeita para os apreciadores da cozinha mediterrânea.
            </p>
          </div>
        </div>
        <div class="accordionItem close">
          <h2 class="accordionIHeading">Mousse de Chocolate Amargo com Calda de Frutas Vermelhas</h2>
          <div class="accordionItemContent">
            <p>Uma sobremesa decadente para os amantes de chocolate. Esta mousse de chocolate amargo é delicadamente aerada, proporcionando uma textura cremosa e derretendo na boca. Acompanhada por uma irresistível calda de frutas vermelhas, feita com morangos, amoras e framboesas, adiciona uma nota de frescor e um contraste agridoce ao sabor intenso do chocolate. Finalizada com uma pitada de hortelã fresca para realçar ainda mais os sabores, esta sobremesa é uma tentação que encanta os paladares mais exigentes.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Esse Script faz a abertura e o fechamento do cardápio do restaurante-->
<script>
  var accItem = document.getElementsByClassName('accordionItem');
  var accHD = document.getElementsByClassName('accordionIHeading');

  for (i = 0; i < accHD.length; i++) {
    accHD[i].addEventListener('click', toggleItem, false);
  }

  function toggleItem() {
    var itemClass = this.parentNode.className;
    for (var i = 0; i < accItem.length; i++) {
      accItem[i].className = 'accordionItem close';
    }
    if (itemClass == 'accordionItem close') {
      this.parentNode.className = 'accordionItem open';
    }
  }
</script>
<!--Galeria de fotos-->
<section class="galeria top" id="galeria">
  <div class="container">
    <div class="heading_top flex1">
      <div class="heading">
        <h5>Nossa galeria de fotos</h5>
        <h2>Galerias de fotos do Hotel</h2>
      </div>
      <div class="button">
        <button class="btn1">Ver fotos</button>
      </div>
    </div>
    <!--"owl-carousel owl-theme foi retirado de um site ai pra usar o botão de rolagem do slide das imagens"-->
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="imagem/g1.jpg" alt="">
      </div>
      <div class="item">
        <img src="imagem/g2.jpg" alt="">
      </div>
      <div class="item">
        <img src="imagem/g3.jpg" alt="">
      </div>
      <div class="item">
        <img src="imagem/g4.jpg" alt="">
      </div>
      <div class="item">
        <img src="imagem/g5.jpg" alt="">
      </div>
      <div class="item">
        <img src="imagem/g6.jpg" alt="">
      </div>
      <div class="item">
        <img src="imagem/g7.jpg" alt="">
      </div>
      <div class="item">
        <img src="imagem/g8.jpg" alt="">
      </div>
    </div>
  </div>
</section>
<!---Scripts referente a botões do slide da galeria, tambem-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
  referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
  referrerpolicy="no-referrer"></script>

<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 4
      }
    }
  })
</script>

  </div>
</section>

</body>
</html>

