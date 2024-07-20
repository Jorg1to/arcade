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
    label{
      color: white
    }

    #carouselExampleIndicators .carousel-inner {
      height: 50vh; /* 50% de la altura de la ventana */
      margin: auto
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
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2 class="text-center mb-4" style="color: white">Formulario de Contacto</h2>
          <form id="formulario-contacto">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
              <label for="asunto">Asunto</label>
              <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" required>
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje</label>
              <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 10px">Enviar</button>
          </form>
        </div>
      </div>
    </div>



<div class="separadorverde"></div>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/Car1.jpg" class="d-block w-100 h-50" alt="Primera imagen">
    </div>
    <div class="carousel-item">
      <img src="imagenes/Car2.jpg" class="d-block w-100" alt="Segunda imagen">
    </div>
    <div class="carousel-item">
      <img src="imagenes/Car3.jpg" class="d-block w-100" alt="Tercera imagen">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<!-- Agregar los enlaces a los scripts de Bootstrap y jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



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

      document.addEventListener("DOMContentLoaded", function() {
          document.getElementById("formulario-contacto").addEventListener("submit", function(event) {
            event.preventDefault(); // Evita que el formulario se envíe por defecto
            alert("Gracias por ponerte en contacto con nostros, intentaremos resolver tu duda lo antes posible.");
            document.getElementById("nombre").value = "";
            document.getElementById("asunto").value = "";
            document.getElementById("mensaje").value = "";

          });
        });
  </script>

       

  
  </body>
  </html>