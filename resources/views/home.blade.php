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
        

/* Estilo para el botón cuando se pasa el cursor sobre él */
    .btn-primary:hover {
    background-color: blueviolet; /* Cambiar a tu color deseado */
    border-color: black;
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

    <main>
        <img src="imagenes/Cardiff-1920x1080.jpg" class="full">
        <div class="separadormorado"></div>
        

        <div class="header-container">
          <div class="welcome">
              <h1 style="text-align: center;">Bienvenido a Arcade Alicante</h1>
              <p style="text-align: center;">Arcade Alicante es un lugar de entretenimiento y diversión ubicado en el corazón de Alicante, España. Situado en la calle Esperanza, número 123, nuestro local es conocido por ofrecer una amplia variedad de juegos arcade clásicos y modernos, así como bebidas refrescantes y deliciosos aperitivos.</p>
              <p style="text-align: center;">Nuestra calle Esperanza, aunque ficticia, refleja la sensación de alegría y emoción que los clientes experimentan al visitar nuestro establecimiento. Estamos convenientemente ubicados cerca de las principales atracciones turísticas de la ciudad, lo que nos convierte en el lugar perfecto para disfrutar de un momento de diversión con amigos y familiares.</p>
          </div>
          <div class="opening-hours">
              <h2 style="color: white; text-align: center;">Horario</h2>
              <ul style="text-align: center;">
                  <li><strong>Lunes:</strong> 18:00 - 1:00</li>
                  <li><strong>Martes:</strong> 18:00 - 1:00</li>
                  <li><strong>Miércoles:</strong> 18:00 - 1:00</li>
                  <li><strong>Jueves:</strong> 18:00 - 1:00</li>
                  <li><strong>Viernes:</strong> 18:00 - 1:00</li>
                  <li><strong>Sábado:</strong> 18:00 - 3:00</li>
                  <li><strong>Domingo:</strong> 18:00 - 3:00</li>
                  <p style="color: white">Reservas solo de 18:00 - 21:00</p>
              </ul>
          </div>
      </div>

        
        <div class="separadorverde"></div>

        <div class="container px-4 py-5" id="hanging-icons">
          <h2 class="pb-2 " style="color: white">Elije como jugar</h2>
          <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
              <div class=" text-body-emphasis  d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <img src="imagenes/icono1.png" style="width: 80px" alt="">
              </div>
              <div>
                <h3 class="fs-2" style="color: #FF00FF">Jugador</h3>
                <p style="color: white">Sumérgete en la nostalgia de los clásicos. Disfruta de una experiencia inolvidable con nuestros juegos retro para un solo jugador.</p>
              </div>
            </div>
            <div class="col d-flex align-items-start">
              <div class="icon-square text-body-emphasis 
               d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <img src="imagenes/icono2.png" style="width: 80px" alt="">
              </div>
              <div>
                <h3 class="fs-2" style="color: #FF00FF">Jugadores</h3>
                <p style="color: white">¿Buscas revivir los momentos épicos de los juegos retro con un amigo? Desde competencias amistosas hasta cooperación estratégica.</p>
          
              </div>
            </div>
            <div class="col d-flex align-items-start">
              <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <img src="imagenes/icono4.png" style="width: 80px" alt="">
              </div>
              <div>
                <h3 class="fs-2" style="color: #FF00FF">Jugadores</h3>
                <p style="color: white">Reúne a tu equipo y prepárate para una noche llena de diversión con nuestros juegos retro para cuatro jugadores. Desde emocionantes carreras hasta intensas batallas.</p>

              </div>
            </div>
          </div>
        </div>

        <div class="separadormorado"></div>

       

        



            



            <div class="px-4 py-5 my-5 text-center">
              <img class="d-block mx-auto mb-4" src="imagenes/logo.png" alt="" width="200" height="200">
              <h2 class="display-5 fw-bold" style="color: white;">Descubre nuestras consolas y juegos</h2>

              </div>
         
        <div class="separadorverde"></div>


          <div class="container px-4 py-5" id="hanging-icons">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
              <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="imagenes/iconopsx.png" alt="">
                </div>
                <div>
                  <h3 class="fs-2" style="color: white">PlayStation</h3>
                  <p style="color: #FF00FF">¿Listo para viajar en el tiempo? Nuestra selección de juegos de PSX te llevará de vuelta a los días de gloria de la primera PlayStation.</p>
                  <a class="btn btn-primary" href="/juegos">Ver mas &raquo;</a>
                </div>
              </div>
              <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="imagenes/iconosnes.png" alt="">
                </div>
                <div>
                  <h3 class="fs-2" style="color: white">Super Nintendo</h3>
                  <p style="color: #02FF00">Déjate llevar por la magia de la era 16 bits con nuestra colección de juegos de SNES.</p>
                  <a class="btn btn-primary" href="/juegos">Ver mas &raquo;</a>
                </div>
              </div>
              <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="imagenes/iconogc.png" alt="">
                </div>
                <div>
                  <h3 class="fs-2" style="color: white">GameCube</h3>
                  <p style="color: #FF00FF">¡Sumérgete en la nostalgia y la diversión con nuestra colección de juegos de GameCube! Descubre la magia de la era de los 128 bits.</p>
                  <a class="btn btn-primary" href="/juegos">Ver mas &raquo;</a>
                </div>
              </div>
            </div>
          </div>

          <div class="separadormorado"></div>

          <div class="container px-4 py-5" id="hanging-icons">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
              <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="imagenes/iconosm.png" alt="">
                </div>
                <div>
                  <h3 class="fs-2" style="color: white">Super Mario</h3>
                  <p style="color: #FF00FF">Embárcate en aventuras coloridas con Mario, el fontanero más famoso del mundo.</p>
                  <a class="btn btn-primary" href="/juegos">Ver mas &raquo;</a>
                </div>
              </div>
              <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="imagenes/iconocrash.png" alt="">
                </div>
                <div>
                  <h3 class="fs-2" style="color: white">Crash Bandicoot</h3>
                  <p style="color: #02FF00">Sumérgete en la locura con Crash Bandicoot, un marsupial intrépido, mientras corre, salta y gira a través de niveles emocionantes</p>
                  <a class="btn btn-primary" href="/juegos">Ver mas &raquo;</a>
                </div>
              </div>
              <div class="col d-flex align-items-start">
                <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                  <img src="imagenes/iconozelda.png" alt="">
                </div>
                <div>
                  <h3 class="fs-2" style="color: white">Zelda</h3>
                  <p style="color: #FF00FF">¡Embárcate en una épica odisea llena de aventuras y misterios con The Legend of Zelda! Únete al valiente héroe Link en su misión para salvar el reino de Hyrule</p>
                  <a class="btn btn-primary" href="/juegos">Ver mas &raquo;</a>
                </div>
              </div>
            </div>
          </div>

          <div class="separadorverde"></div>

            
          <section class="py-5 text-center container">
            <div class="row py-lg-5">
              <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Descubre Nuestras Bebidas</h1>
                <p>
                  <a href="/bebidas" class="btn btn-primary my-2">Bebidas</a>
           
                </p>
              </div>
            </div>
        
          <div class="album py-5">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" id="miCard">
                    <img src="imagenes/bebida1.jpeg" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                    <div class="card-body">
                      <h2 class="cardh2">Aku Aku -v</h2>
                      <p class="card-text">

                        La favorita de todos... es larga, es afrutada, es Crash Bandicoot y.

                        Plantation Pineapple y Mount Eclipse, melocotón, plátano, manzana.
                        
                        </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="/bebidas">
                          <button type="button" class="btn btn-sm btn-primary">Ver mas &raquo;   
                          </button>
                        </a>
                        </div>
           
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" id="miCard2">
                    <img src="imagenes/No-Uka-Uka-1-700x554.png" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                    <div class="card-body">
                      <h2 class="cardh2">NO Aku Aku</h2>
                      <p class="card-text">Sin Uka Uka, sin resaca... Aleja el mal vudú de mañana con este numerito.

                        Caleno 0% alcohol, guayaba, piña, jarabe Refresher.

                        Y un poco de vodoo
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="/bebidas">
                          <button type="button" class="btn btn-sm btn-primary">Ver mas &raquo;   
                          </button>
                        </a>
                        </div>
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" id="miCard3">
                    <img src="imagenes/Kong-Island-Ice-Tea-700x467.jpeg" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                    <div class="card-body">
                      <h2 class="cardh2">Zumo King Kong</h2>
                      <p class="card-text">El clásico té helado Long Island con alcohol. Atención, no tome demasiado.

                        Vodka Finlandia, tequila, ron Wray & Nephew, piña caribeña, té, melocotón</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="/bebidas">
                          <button type="button" class="btn btn-sm btn-primary">Ver mas &raquo;   
                          </button>
                        </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="col">
                  <div class="card shadow-sm" id="miCard4">
                    <img src="imagenes/Drinks-460x380@1.5x.png" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                    <div class="card-body">
                      <h2 class="cardh2">COWABUNGA</h2>
                      <p class="card-text">Un trago de este número verde brillante y dirás "¡pizza!" mientras duermes. 

                        Gummybear Ginebra Beefeater, manzana, kiwi, vermut seco.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="/bebidas">
                          <button type="button" class="btn btn-sm btn-primary">Ver mas &raquo;   
                          </button>
                        </a>
                        </div>
               
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card shadow-sm" id="miCard5">
                    <img src="imagenes/Powerstar-Martini-700x453.png" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                    <div class="card-body">
                      <h2 class="cardh2">Martini SuperStar</h2>
                      <p class="card-text">¿Por qué tomar un chupito de prosecco con tu martini con sabor a fruta de la pasión cuando puedes tomar Hooch?

                        Vodka Finlandia, frambuesa.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="/bebidas">
                          <button type="button" class="btn btn-sm btn-primary">Ver mas &raquo;   
                          </button>
                        </a>
                        </div>
                     
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card shadow-sm" id="miCard6">
                    <img src="imagenes/Kirby-1-700x460.png" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                    <div class="card-body">
                      <h2 class="cardh2">Kirby</h2>
                      <p class="card-text">Maldición, Kirby... ¡De nuevo con el cubo de hielo parpadeante! Bienvenido, King. Te hemos echado de menos.

                        Beefeater ginebra rosa, licor de amapola.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="/bebidas">
                          <button type="button" class="btn btn-sm btn-primary">Ver mas &raquo;   
                          </button>
                        </a>
                        </div>
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>


    
              <div class="separadorverde"></div>

              <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="imagenes/logo.png" alt="" width="200" height="200">
                <h2 class="display-5 fw-bold" style="color: #FF00FF;">Contacto</h2>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4" style="color: #02FF00;">Si tienes alguna pregunta, comentario o sugerencia, no dudes en enviarnos un mensaje. Estamos aquí para ayudarte en lo que necesites.</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="/contacto">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Contacto</button>
                  </a>
              
                
                  </div>
                </div>
              </div>


    
        <script src="script.js"></script>
            
    </main>
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