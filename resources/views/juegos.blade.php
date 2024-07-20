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

        ul{
          color: #02FF00;
          list-style-type: none;
        }
        

/* Estilo para el botón cuando se pasa el cursor sobre él */
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
      <img src="imagenes/wp4984203-retro-games-controllers-wallpapers.jpg" class="full">
      <div class="separadorverde"></div>


      <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h1 style="color: white;">Aquí te presentamos el top 6 de los juegos retros más jugados que ofrecemos, cada uno con su propio encanto y desafío</h1>
              <p class="lead" style="color: #FF00FF;">Prepárate para una experiencia inolvidable llena de diversión y emoción mientras exploras estos icónicos títulos.</p>
              <p>
                <a href="/reservas" class="btn btn-primary my-2">Reserva</a>
         
              </p>
            </div>
          </div>
        </section>
        
        <section>
        <div class="album py-5 ">
          <div class="container">
      
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm" id="miCard">
                  <img src="imagenes/pacman.bmp" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225"> 
                  <div class="card-body">
                      <h2 class="cardh2">PAC-MAN</h2>
                    <p class="card-text">¡Embárcate en una aventura laberíntica con Pac-Man! Enfréntate a los fantasmas mientras devoras puntos y persigues frutas en este clásico atemporal.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                  
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm" id="miCard2">
                  <img src="imagenes/supermariomenu.jpg" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                  <div class="card-body">
                      <h2 class="cardh2">Super Mario 3</h2>
                    <p class="card-text">¡Únete a Mario en su viaje más épico con Super Mario Bros. 3! Salta, corre y vuela a través de mundos llenos de desafíos en esta aventura clásica. Yoshi te ayudará</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm" id="miCard3">
                  <img src="imagenes/sf2menu.jpg" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                   <div class="card-body">
                      <h2 class="cardh2">Street Fighter 2</h2>
                    <p class="card-text">¡Prepárate para la batalla con Street Fighter II! Elige luchadores como Ryu o Ken y enfrenta a los mejores guerreros del mundo en intensos combates uno a uno.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                       
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="col">
                <div class="card shadow-sm" id="miCard4">
                  <img src="imagenes/tetrismenu.png" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                     <div class="card-body">
                      <h2 class="cardh2">TETRIS</h2>
                    <p class="card-text">¡Desafía tu mente con Tetris! Coloca las piezas encajando perfectamente para completar filas y ganar puntos en este clásico juego de puzzle.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                   
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm" id="miCard5">
                  <img src="imagenes/dkmenu.bmp" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225">
                     <div class="card-body">
                      <h2 class="cardh2">Donkey Kong</h2>
                    <p class="card-text">¡Únete a Mario en su primera aventura para salvar a la princesa de las garras de Donkey Kong!. Trata de esquivar todos los obstaculos</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                
                      </div>
                 
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm" id="miCard6">
                  <img src="imagenes/galagamenu.jpg" class="bd-placeholder-img card-img-top" alt="Descripción de la imagen" width="100%" height="225"> 
   
                      <div class="card-body">
                          <h2 class="cardh2">Galaga</h2>
                    <p class="card-text">¡Defiende la galaxia con Galaga! Pilotea tu nave espacial y enfrenta oleadas de enemigos alienígenas en este clásico shooter arcade.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                       
                      </div>
                   
                    </div>
                  </div>
                </div>
              </div>
          </section>

          <div class="separadormorado"></div>
          <section class="py-5 text-center container">
            <div class="row py-lg-5">
              <div class="col-lg-6 col-md-8 mx-auto">
                <h1 style="color: white;">Consolas mas Reservadas</h1>
                <p class="lead" style="color: #FF00FF;">Prepárate para una experiencia inolvidable llena de diversión y emoción mientras exploras estos icónicos títulos.</p>
                <p>
                 
           
                </p>
              </div>
            </div>
          </section>
          
  
          <div class="container col-xxl-8 px-4 py-5">
              <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                  <img src="imagenes/neogeoconsola.webp" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                  <h1 class="display-5 fw-bold lh-1 mb-3">NEO GEO</h1>
                  <p class="lead" style="color: #02FF00">Descubre la época dorada de los juegos arcade con nuestra selección de los mejores títulos para Neo Geo. Desde la acción explosiva de Metal Slug hasta los intensos combates de The King of Fighters '98, cada juego te transportará a una experiencia única llena de emoción y desafíos. Sumérgete en la nostalgia y disfruta de la auténtica magia de los clásicos de Neo Geo en nuestro local arcade.</p>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="/reservas">
                      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Reserva</button>
                    </a>
                 
                  </div>
                </div>
              </div>
            </div>

            <div class="separadorverde"></div>

            <div class="container col-xxl-8 px-4 py-5">
              <div class="row flex-lg-row align-items-center g-5 py-5">
                  <div class="col-10 col-sm-8 col-lg-6">
                      <img src="imagenes/consola-retro-nintendo-super-nes-classic-mini.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                  </div>
                  <div class="col-lg-6">
                      <h1 class="display-5 fw-bold lh-1 mb-3">Super Nintendo</h1>
                      <p class="lead" style="color: #02FF00" >Viaja en el tiempo hasta la era de los 16 bits con nuestra colección de los mejores juegos para SNES. Desde las legendarias aventuras de Super Mario World y The Legend of Zelda: A Link to the Past hasta la acción trepidante de Super Metroid y Super Mario Kart, cada juego te ofrece horas de diversión y entretenimiento nostálgico. Sumérgete en la nostalgia y disfruta de la auténtica experiencia de los clásicos de SNES en nuestro local arcade.</p>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="/reservas">
                          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Reserva</button>
                        </a>

                      </div>
                  </div>
              </div>
          </div>

          <div class="separadormorado"></div>

          <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="imagenes/psx.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">PSX</h1>
                <p class="lead" style="color: #02FF00">Revive los momentos más memorables de la primera PlayStation con nuestra cuidadosa selección de los mejores juegos para PSX. Desde las épicas aventuras de Final Fantasy VII y Metal Gear Solid hasta la tensión inigualable de Resident Evil 2, cada título te sumergirá en mundos vibrantes llenos de emoción y acción. Explora nuestra colección y redescubre la magia de los clásicos de PSX en nuestro local arcade.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <a href="/reservas">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Reserva</button>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="separadorverde"></div>

          <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="imagenes/n64.webp" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Nintendo 64</h1>
                    <p class="lead" style="color: #02FF00" >Descubre la magia de los 64 bits con nuestra selección de los mejores juegos para Nintendo 64. Desde la revolucionaria aventura de Super Mario 64 hasta la épica odisea de The Legend of Zelda: Ocarina of Time, cada título te llevará a emocionantes mundos llenos de diversión y aventura. Experimenta la emoción de los clásicos como GoldenEye 007 y Mario Kart 64 en nuestro local arcade y deja que la nostalgia te envuelva.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                      <a href="/reservas">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Reserva</button>
                      </a>

                    </div>
                </div>
            </div>
        </div>
          
          
          


  
      <script src="script.js"></script>
          
  </main>

  <div class="separadormorado"></div>
  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/q_9Pbl3UTDo?si=-7TH2wBX2GvB_HRx" width="100%" height="1000px" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
  <div class="separadorverde"></div>


  <div class="container-lista">
      <div class="list">
        <h2 class="h2-lista">Juegos de Disparos</h2>
        <ul>
          <li>Galaga</li>
          <li>Space Invaders</li>
          <li>Contra</li>
          <li>Time Crisis</li>
          <li>Gradius</li>
        </ul>
      </div>
    
      <div class="list">
        <h2 class="h2-lista">Juegos de Plataforma</h2>
        <ul>
          <li>Super Mario Bros.</li>
          <li>Sonic the Hedgehog</li>
          <li>Donkey Kong</li>
          <li>Super Metroid</li>
          <li>Mega Man</li>
        </ul>
      </div>
    
      <div class="list">
        <h2 class="h2-lista">Juegos de Lucha</h2>
        <ul>
          <li>Street Fighter II</li>
          <li>Mortal Kombat</li>
          <li>The King of Fighters '98</li>
          <li>Double Dragon</li>
          <li>Final Fight</li>
        </ul>
      </div>
    
      <div class="list">
        <h2 class="h2-lista">Juegos de Rompecabezas</h2>
        <ul>
          <li>Tetris</li>
          <li>Puzzle Bobble</li>
          <li>Columns</li>
          <li>Mr. Driller</li>
          <li>Super Puzzle Fighter II Turbo</li>
        </ul>
      </div>
    
      <div class="list">
        <h2 class="h2-lista">Juegos de Carreras</h2>
        <ul>
          <li>Out Run</li>
          <li>Daytona USA</li>
          <li>Gran Turismo</li>
          <li>Ridge Racer</li>
          <li>Cruis'n USA</li>
        </ul>
      </div>


    <div class="list">
      <h2 class="h2-lista">Juegos de Aventura</h2>
      <ul>
        <li>The Legend of Zelda</li>
        <li>Metroid</li>
        <li>Castlevania</li>
        <li>Adventure Island</li>
        <li>Ghosts 'n Goblins</li>
      </ul>
    </div>
  
    <div class="list">
      <h2 class="h2-lista">Juegos de Deportes</h2>
      <ul>
        <li>Track & Field</li>
        <li>NBA Jam</li>
        <li>Excitebike</li>
        <li>International Superstar Soccer</li>
        <li>Super Sidekicks</li>
      </ul>
    </div>
  
    <div class="list">
      <h2 class="h2-lista">Juegos de Estrategia</h2>
      <ul>
        <li>Command & Conquer</li>
        <li>Age of Empires</li>
        <li>StarCraft</li>
        <li>Warcraft</li>
        <li>SimCity</li>
      </ul>
    </div>
  
    <div class="list">
      <h2 class="h2-lista">Juegos de Disparos en Tercera Persona</h2>
      <ul>
        <li>Metal Slug</li>
        <li>Contra: Hard Corps</li>
        <li>Gunstar Heroes</li>
        <li>Sunset Riders</li>
        <li>Wild Guns</li>
      </ul>
    </div>
  
    <div class="list">
      <h2 class="h2-lista">Juegos de Música y Baile</h2>
      <ul>
        <li>Dance Dance Revolution</li>
        <li>Beatmania IIDX</li>
        <li>Guitar Hero</li>
        <li>Pump It Up</li>
        <li>Samba de Amigo</li>
      </ul>
    </div>
  </div>
  </div>
  


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