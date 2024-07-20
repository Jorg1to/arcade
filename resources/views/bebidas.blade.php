<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcade Alicante</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="public/"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Estilos para la fuente */
        body {
            font-family: 'Pixelify Sans', sans-serif;
            
        }

        /* Estilos para el color de fondo */
        body {
            background-color: black;
        }

        h1{
            margin-top: 50px;
            color: white;
            margin-bottom: 50px;
        }
        
        .btn{
            background-color: #FF00FF;
            color: white;
        }

        .btn-primary {
        background-color: #FF00FF; /* Color de fondo predeterminado */
        color: white; /* Color de texto predeterminado */
        border-color: black;
        }
        

    .btn-primary:hover {
    background-color: blueviolet; /* Cambiar a tu color deseado */
    border-color: black;
    }

        /* Otros estilos personalizados si los necesitas */
        .card {
      position: relative;
    }
    .reservar-btn {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .card:hover .reservar-btn {
      opacity: 1;
    }

    .sectionimg{
    display: flex;
    align-items: center
    width: 600px;
    height: 430px;
  }
  .sectionimg img{
    width: 0px;
    flex-grow: 1;
    object-fit: cover;
    opacity: .8;
    transition: .5s ease;
  } 
  .sectionimg img:hover{

    width: 300px;
    opacity: 1;
    filter: contrast(120%);
  }
  .nav-link{
    color: #FF00FF;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 15px; /* Añadir espacio alrededor del texto */
  }

  .nav-link:hover{
    color: yellow
  }
    
    </style>
   

</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/home">
            <img src="imagenes/logo.png" alt="Logo" height="200" width="200" class="blur-img">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #02FF00;<">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/juegos">Juegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bebidas">Bebidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/reservas">Reserva</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
              <img src="imagenes/bebida-principal.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
              <h1 class="display-5 fw-bold lh-1 mb-3">BEBIDAS</h1>
              <p class="lead" style="color: #02FF00" >¡Bienvenido a la zona de bebidas de nuestra página web arcade! Enfrentarse a los desafíos de los juegos puede ser emocionante y desgastante, por eso hemos preparado una selección de bebidas que te ayudarán a mantener la energía y la concentración mientras juegas. Desde refrescantes sodas hasta deliciosos batidos, tenemos algo para satisfacer todos los gustos y necesidades. ¡Descubre nuestras opciones a continuación!</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        

              </div>
          </div>
      </div>
  </div>


    <div class="container px-4 py-5" id="custom-cards">

  
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('imagenes/No-Uka-Uka-1-700x554.png');" id="miCard">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Tematicas</h3>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('imagenes/cocacola.jpeg');" id="miCard2">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Refrescos</h3>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
          </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('imagenes/frutas.jpg');" id="miCard3">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Smoothies</h3>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="separadorverde"></div>

    <section>
    <div class="container px-4 py-5" id="icon-grid">
      <h2 class="" style="color: #FF00FF">Tematicas</h2>
  
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
          <img class="iconosbebida" src="imagenes/iconobebida.png" alt="">
          <div>
            <h3 class="fw-bold mb-0 fs-4" style="color: white">Aku Aku -v</h3>
            <p style="color: #02FF00">La favorita de todos... es larga, es afrutada, es Crash Bandicoot y. Plantation Pineapple y Mount Eclipse, melocotón, plátano, manzana.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <img class="iconosbebida" src="imagenes/iconobebida.png" alt="">
          <div>
            <h3 class="fw-bold mb-0 fs-4" style="color: white">No Aku Aku</h3>
            <p style="color: #02FF00">Sin Uka Uka, sin resaca... Aleja el mal vudú de mañana con este numerito. Caleno 0% alcohol, guayaba, piña, jarabe Refresher. Y un poco de vodoo</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <img class="iconosbebida" src="imagenes/iconobebida.png" alt="">
          <div>
            <h3 class="fw-bold mb-0 fs-4" style="color: white">Zumo King Kong</h3>
            <p style="color: #02FF00">El clásico té helado Long Island con alcohol. Atención, no tome demasiado. Vodka Finlandia, tequila, ron Wray & Nephew, piña caribeña, té, melocotón</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <img class="iconosbebida" src="imagenes/iconobebida.png" alt="">
          <div>
            <h3 class="fw-bold mb-0 fs-4" style="color: white">Cowabunga</h3>
            <p style="color: #02FF00">Un trago de este número verde brillante y dirás "¡pizza!" mientras duermes. Gummybear Ginebra Beefeater, manzana, kiwi, vermut seco.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <img class="iconosbebida" src="imagenes/iconobebida.png" alt="">
          <div>
            <h3 class="fw-bold mb-0 fs-4" style="color: white">Martini SuperStar</h3>
            <p style="color: #02FF00">¿Por qué tomar un chupito de prosecco con tu martini con sabor a fruta de la pasión cuando puedes tomar Hooch? Vodka Finlandia, frambuesa.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <img class="iconosbebida" src="imagenes/iconobebida.png" alt="">
          <div>
            <h3 class="fw-bold mb-0 fs-4" style="color: white">Kirby</h3>
            <p style="color: #02FF00">Maldición, Kirby... ¡De nuevo con el cubo de hielo parpadeante! Bienvenido, King. Te hemos echado de menos. Beefeater ginebra rosa, licor de amapola.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <img class="iconosbebida" src="imagenes/iconobebida.png" alt="">
          <div>
            <h3 class="fw-bold mb-0 fs-4" style="color: white">Lara Lost</h3>
            <p style="color: #02FF00">Un pequeño y atrevido espray invernal. Cubierto con azúcar glas y purpurina para conseguir un efecto de bola de nieve.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <img class="iconosbebida" src="imagenes/iconobebida.png" alt="">
          <div>
            <h3 class="fw-bold mb-0 fs-4" style="color: white">Revivir</h3>
            <p style="color: #02FF00">Si quieres levantarte, ¡necesitas un poco de reanimación! Si te encantó un WKD en su día, entonces te encantará esto.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<div class="separadormorado"></div>
  <section class="sectionimg">
    <img src="imagenes/bebida1.jpeg" alt="">
    <img src="imagenes/No-Uka-Uka-1-700x554.png" alt="">
    <img src="imagenes/Kong-Island-Ice-Tea-700x467.jpeg" alt="">
    <img src="imagenes/Drinks-460x380@1.5x.png" alt="">
    <img src="imagenes/Powerstar-Martini-700x453.png" alt="">
    <img src="imagenes/Kirby-1-700x460.png" alt="">
    <img src="imagenes/laralost.png" alt="">
    <img src="imagenes/revivir.jpeg" alt="">
  </section>
<div class="separadorverde"></div>

<section>
  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="" style="color: #FF00FF">Refrescos</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <img class="iconosbebida" src="imagenes/iconorefresco.png" alt="">
        <div>
          <h3 class="fw-bold mb-0 fs-4" style="color: white">Coca-Cola</h3>
          <p style="color: #02FF00">El clásico refresco de cola, conocido por su sabor único y su capacidad para refrescar en cualquier momento.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img class="iconosbebida" src="imagenes/iconorefresco.png" alt="">
        <div>
          <h3 class="fw-bold mb-0 fs-4" style="color: white">Sprite</h3>
          <p style="color: #02FF00">Refrescante y con un estallido de lima-limón en cada sorbo, Sprite es ligero y efervescente.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img class="iconosbebida" src="imagenes/iconorefresco.png" alt="">
        <div>
          <h3 class="fw-bold mb-0 fs-4" style="color: white">Fanta</h3>
          <p style="color: #02FF00">Con una variedad de sabores frutales vibrantes, Fanta ofrece una explosión de sabor en cada botella.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img class="iconosbebida" src="imagenes/iconorefresco.png" alt="">
        <div>
          <h3 class="fw-bold mb-0 fs-4" style="color: white">Monster</h3>
          <p style="color: #02FF00">Una bebida energética potente y audaz, Monster está cargada de cafeína.</p>
        </div>
      </div>

  </div>
</section>

<div class="separadormorado"></div>

<section class="sectionimg">
  <img src="imagenes/cocacola.jpeg" alt="">
  <img src="imagenes/refrescos3.jpeg" alt="">
  <img src="imagenes/refrescos2.jpeg" alt="">
  <img src="imagenes/monster.jpeg" alt="">
</section>

<div class="separadorverde"></div>



<section>
  <div class="container px-4 py-5" id="icon-grid">
    <h2 class="" style="color: #FF00FF">Smoothies</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <img class="iconosbebida" src="imagenes/iconosmo.png" alt="">
        <div>
          <h3 class="fw-bold mb-0 fs-4" style="color: white">Frutos del bosque</h3>
          <p style="color: #02FF00">Una mezcla refrescante de fresas, arándanos y moras, combinadas con yogur griego.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img class="iconosbebida" src="imagenes/iconosmo.png" alt="">
        <div>
          <h3 class="fw-bold mb-0 fs-4" style="color: white">Tropical</h3>
          <p style="color: #02FF00">Una explosión de sabores tropicales con piña, mango y plátano, mezclados con jugo de naranja .</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img class="iconosbebida" src="imagenes/iconosmo.png" alt="">
        <div>
          <h3 class="fw-bold mb-0 fs-4" style="color: white">Verde</h3>
          <p style="color: #02FF00">Una mezcla saludable de espinacas frescas, piña, plátano y jugo de manzana.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <img class="iconosbebida" src="imagenes/iconosmo.png" alt="">
        <div>
          <h3 class="fw-bold mb-0 fs-4" style="color: white">Banana Split</h3>
          <p style="color: #02FF00">Una indulgente combinación de plátano maduro, cacao en polvo, leche de almendras.</p>
        </div>
      </div>

  </div>
</section>

<div class="separadormorado"></div>

<section class="sectionimg">
  <img src="imagenes/smoo.jpeg" alt="">
  <img src="imagenes/smoo2.jpeg" alt="">
  <img src="imagenes/smoo3.jpeg" alt="">
  <img src="imagenes/smoo4.jpeg" alt="">
</section>




<footer>
  <div class="separadormorado"></div>
  <div class="container">
      <div class="row">
          <div class="col-md-6 mb-3 mb-md-0 text-center text-md-start">
              <img src="imagenes/logo.png" alt="Logo de la empresa" width="120">
              <p class="" style="color: white;">&copy; 2024 Arcade Alicante</p>
              <div>
                  <a href="https://twitter.com/" target="_blank" class="social-link">
                      <img src="imagenes/iconotw.png" alt="Twitter Icon" width="20">
                  </a>
                  <a href="https://www.youtube.com/" target="_blank" class="social-link">
                      <img src="imagenes/iconoyt.png" alt="YouTube Icon" width="20">
                  </a>
                  <a href="https://www.instagram.com/" target="_blank" class="social-link">
                      <img src="imagenes/iconoig.png" alt="Instagram Icon" width="20">
                  </a>
                  <a href="https://www.facebook.com/" target="_blank" class="social-link">
                      <img src="imagenes/iconofb.png" alt="Facebook Icon" width="20">
                  </a>
              </div>
          </div>
          <div class="col-md-6 text-center text-md-end">
              <ul class="list-unstyled" style="padding: 30px;">
                  <li><a href="/home" class="text-decoration-none">Home</a></li>
                  <li><a href="/juegos" class="text-decoration-none">Juegos</a></li>
                  <li><a href="/bebidas" class="text-decoration-none">Bebidas</a></li>
                  <li><a href="/contacto" class="text-decoration-none">Contacto</a></li>
                  <li><a href="/reservas" class="text-decoration-none">Reservas</a></li>
                  <li><a href="/cookies" class="text-decoration-none">Cookies</a></li>
                  <li><a href="/aviso-legal" class="text-decoration-none">Aviso Legal</a></li>
                  <li><a href="/politica-privacidad" class="text-decoration-none">Política de Privacidad</a></li>
              </ul>
          </div>
      </div>
  </div>
  <div class="separadorverde" style="margin-top: 10px"></div>
</footer>













      
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="{{ asset('js/script.js') }}"></script>
      <script>
        $(document).ready(function(){
            // Cuando se hace clic en el botón hamburguesa, se agrega o quita la clase "show" del div con ID "navbarNav"
            $(".navbar-toggler").click(function(){
                $("#navbarNav").toggleClass("show");
            });
    
            // Cuando se hace clic en un enlace del menú, se quita la clase "show" del div con ID "navbarNav"
            $(".nav-link").click(function(){
                $("#navbarNav").removeClass("show");
            });
        });
    </script>
  
  </body>
  </html>