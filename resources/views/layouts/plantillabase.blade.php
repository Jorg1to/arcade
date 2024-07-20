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
        <a class="navbar-brand" href="/inicio">
          <img height="200" width="200" src="{{ asset('imagenes/logo.png') }}" alt="" class="blur-img">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: yellow" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/inicio">Inicio</a>
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
    
    <div class="container">
        @yield('contenido')
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>

  <footer>
    <div class="separadormorado"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-3 mb-md-0 text-center text-md-start">
          <img height="100" width="100" src="{{ asset('imagenes/logo.png') }}" alt="">
          <p class="" style="color: white;">&copy; 2024 Arcade Alicante</p>
          <img height="20" width="20" src="{{ asset('imagenes/iconotw.png') }}" alt="">
          <img height="20" width="20" src="{{ asset('imagenes/iconoyt.png') }}" alt="">
          <img height="20" width="20" src="{{ asset('imagenes/iconoig.png') }}" alt="">
          <img height="20" width="20" src="{{ asset('imagenes/iconofb.png') }}" alt="">
        </div>
        <div class="col-md-6 text-center text-md-end">
          <ul class="list-unstyled" style="padding: 30px;">
            <li><a href="/inicio" class="text-decoration-none ">Home</a></li>
            <li><a href="/juegos" class="text-decoration-none ">Juegos</a></li>
            <li><a href="/bebidas" class="text-decoration-none ">Bebidas</a></li>
            <li><a href="/contacto" class="text-decoration-none ">Contacto</a></li>
            <li><a href="/reservas" class="text-decoration-none ">Reservas</a></li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="separadorverde"></div>
  </footer>
  
  
  <script src="{{ asset('js/script.js') }}">

var inputFecha = document.getElementById('fecha');

// Obtener la fecha actual
var fechaActual = new Date();

// Obtener el día actual, mes y año
var dia = fechaActual.getDate();
var mes = fechaActual.getMonth() + 1; // Meses en JavaScript son indexados desde 0
var anio = fechaActual.getFullYear();

// Formatear el día y el mes con dos dígitos si es necesario
if (dia < 10) {
    dia = '0' + dia;
}
if (mes < 10) {
    mes = '0' + mes;
}

// Establecer la fecha mínima permitida (hoy)
inputFecha.min = dia + '/' + mes + '/' + anio;

// Calcular la fecha máxima permitida (hoy + 1 mes)
var fechaMaxima = new Date(fechaActual);
fechaMaxima.setMonth(fechaMaxima.getMonth() + 1);

// Obtener el día, mes y año de la fecha máxima
var maxDia = fechaMaxima.getDate();
var maxMes = fechaMaxima.getMonth() + 1; // Meses en JavaScript son indexados desde 0
var maxAnio = fechaMaxima.getFullYear();

// Formatear el día y el mes con dos dígitos si es necesario
if (maxDia < 10) {
    maxDia = '0' + maxDia;
}
if (maxMes < 10) {
    maxMes = '0' + maxMes;
}

// Establecer la fecha máxima permitida (hoy + 1 mes)
inputFecha.max = maxDia + '/' + maxMes + '/' + maxAnio;
  </script>

</body>
</html>
</html>