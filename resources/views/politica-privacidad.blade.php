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
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="color: white">
                <h1 class="text-center my-4">Política de Privacidad</h1>
                <p class="lead">Esta Política de Privacidad describe cómo recopilamos, utilizamos y protegemos tu información personal.</p>
                <h2>Recopilación de información</h2>
                <p>Recopilamos información personal que nos proporcionas voluntariamente cuando te registras en nuestro sitio, realizas una compra o te comunicas con nosotros. Esta información puede incluir tu nombre, dirección de correo electrónico, dirección postal y número de teléfono.</p>
                <h2>Uso de la información</h2>
                <p>Utilizamos tu información personal para procesar tus pedidos, enviarte actualizaciones importantes, responder a tus consultas y mejorar nuestros servicios. No compartimos tu información con terceros, excepto cuando es necesario para cumplir con la ley o proteger nuestros derechos.</p>
                <h2>Protección de la información</h2>
                <p>Implementamos medidas de seguridad adecuadas para proteger tu información personal contra el acceso no autorizado, la alteración, divulgación o destrucción. Sin embargo, ninguna transmisión de datos por Internet es completamente segura, por lo que no podemos garantizar la seguridad absoluta de tu información.</p>
                <h2>Tus derechos</h2>
                <p>Tienes derecho a acceder, rectificar y eliminar tu información personal. También puedes oponerte al tratamiento de tus datos en determinadas circunstancias. Para ejercer estos derechos, por favor, contáctanos a través de [Correo Electrónico].</p>
            </div>
        </div>
    </div>
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