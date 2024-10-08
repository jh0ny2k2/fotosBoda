<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miguel & Jenni</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" href="{{ asset('storage/fondoPrimo.png') }}" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=New+Amsterdam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">



      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <audio id="miAudio" src="{{ asset('audio/musica.mp3') }}"></audio>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var audio = document.getElementById('miAudio');
            audio.play().catch(function(error) {
                console.log('Error al intentar reproducir el audio:', error);
            });
        });
    </script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth; /* Desplazamiento suave */
        }
        #main-video {
            transition: transform 0.5s ease;
        }

        .font-secondary {
            font-family: 'Dancing Script', cursive;
        }

        .font-terciary {
            font-family: "New Amsterdam", sans-serif;
        }

        .font-pacifico {
            font-family: "Pacifico", serif;
        }

        .font-e {
            font-family: "Indie Flower", serif;
        }

        .scroll-to-bottom {
            animation: bounce 2s infinite; /* Animación de rebote */
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        .animated-icon {
            animation: bounce 2s infinite;
        }
        
        .swiper-wrapper {
      width: 100%;
      height: max-content !important;
      -webkit-transition-timing-function: linear !important;
      transition-timing-function: linear !important;
      position: relative;
      }
      .swiper-pagination-bullet {
      background: #4f46e5;
      }
      

    </style>
</head>
<body style="background-image: url('{{ asset('storage/fondo.jpg') }}');">








<!-- Banner -->
<div class="relative h-screen p-6 sm:p-16 md:p-20  bg-center" style="background-image: url('{{ asset('storage/fondo inicio.jpeg') }}'); background-size: cover;">
    <!-- Contenido del Banner -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white">

         <img src="{{ asset('storage/avion.gif') }}" class="w-16 h-16" alt=""> 

        <img src="{{ asset('storage/bodorrio.png') }}" alt="">
        
    </div>
</div>

<div class="py-16 bg-no-repeat bg-center bg-contain" style="background-image: url('{{ asset('storage/invitacion.png') }}');">
</div>


<!-- SECCIÓN INFORMACIÓN -->
<section class="py-16 bg-white" style="background-image: url('{{ asset('storage/fondo.jpg') }}');">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
            <!-- Columna Celebración -->
            <div class="flex flex-col items-center">
                <div class="mb-4">
                    <img width="50" height="50" src="https://img.icons8.com/ios/50/around-the-globe.png" alt="around-the-globe"/>
                </div>
                <h3 class="text-3xl text-sky-950 font-pacifico mb-4">La Celebración</h3>
                <p class="text-2xl font-e text-center mb-6 mt-10 ">Salones Drako</p>
                <p class="text-lg text-center mb-6 font-e">Carretera Gador-Laujar, Alhama de Almería</p>
                <p class="text-lg text-center mb-8 font-e">31 de Mayo a las 12:00 h</p>
                <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0xd700c912e7d8be9:0x3b966fc438429562?sa=X&ved=1t:8290&ictx=111" class=" text-sky-950 border-b-2 border-yellow-600 py-3 text-lg ">Ver ubicación</a>
            </div>
        </div>
    </div>
</section>


<!-- SECCIÓN RELOJ -->
<section class="flex flex-col items-center justify-center bg-gray-200 py-8 ">

    

    <div class="rounded-full p-8 max-w-xs sm:max-w-sm md:max-w-lg lg:max-w-xl ">
        <div class="text-center pb-4">
            <span class="font-secondary text-sky-900 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold">Cuanto Falta Para el Viaje</span>
        </div>
        <div class="flex flex-wrap justify-center rounded-full space-x-4 sm:space-x-6">
            <div class="flex flex-col items-center border-r-0 sm:border-r-2 sm:pr-4 border-black mb-4 sm:mb-0">
                <span id="days" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800">00</span>
                <span class="text-xs sm:text-sm text-gray-600 uppercase">Días</span>
            </div>
            <div class="flex flex-col items-center border-r-0 sm:border-r-2 sm:pr-4 border-black mb-4 sm:mb-0">
                <span id="hours" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800">00</span>
                <span class="text-xs sm:text-sm text-gray-600 uppercase">Hs</span>
            </div>
            <div class="flex flex-col items-center border-r-0 sm:border-r-2 sm:pr-4 border-black mb-4 sm:mb-0">
                <span id="minutes" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800">00</span>
                <span class="text-xs sm:text-sm text-gray-600 uppercase">Min</span>
            </div>
            <div class="flex flex-col items-center">
                <span id="seconds" class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-800">00</span>
                <span class="text-xs sm:text-sm text-gray-600 uppercase">Seg</span>
            </div>
        </div>
    </div>
</section>











<!-- SECCIÓN ITINERARIO -->
<div class="py-16 px-4 sm:px-8 md:px-16 flex flex-col items-center" style="background-image: url('{{ asset('storage/fondo.jpg') }}');">
    <h3 class="text-3xl text-sky-950 font-pacifico mb-8">Itinerario</h3>

    <!-- Item 1: Ceremonia -->
    <div class="flex flex-col items-center relative mb-12">
        <div class="p-4 mt-5">
            <img src="{{ asset('storage/ceremonia.gif') }}" alt="Ceremonia" class="w-12 h-12">
        </div>
        <div class="text-center mb-4">
            <p class="text-[#b39b79] text-xl font-e">Ceremonia</p>
        </div>
        <div class="h-16 w-1 bg-[#082F49] absolute top-full"></div>
    </div>

    <!-- Item 2: Cóctel de Bienvenida -->
    <div class="flex flex-col items-center relative mb-12">
        <div class="p-4 mt-5">
            <img src="{{ asset('storage/drink.gif') }}" alt="Cóctel de Bienvenida" class="w-12 h-12">
        </div>
        <div class="text-center mb-4">
            <p class="text-[#b39b79] text-xl font-e">Cóctel de Bienvenida</p>
        </div>
        <div class="h-16 w-1 bg-[#082F49] absolute top-full"></div>
    </div>
    
    <!-- Item 3: Comida -->
    <div class="flex flex-col items-center relative mb-12">
        <div class="p-4 mt-5">
            <img src="{{ asset('storage/comida.gif') }}" alt="Comida" class="w-14 h-14">
        </div>
        <div class="text-center mb-4">
            <p class="text-[#b39b79] text-xl font-e">Comida</p>
        </div>
        <div class="h-16 w-1 bg-[#082F49] absolute top-full"></div>
    </div>

    <!-- Item 4: Apertura del Baile -->
    <div class="flex flex-col items-center relative">
        <div class="p-4 mt-5">
            <!-- <img src="baile.gif" alt="Apertura del Baile" class="w-12 h-12"> -->
            <img src="{{ asset('storage/baile.gif') }}" alt="Cóctel de Bienvenida" class="w-12 h-12">
        </div>
        <div class="text-center">
            <p class="text-[#b39b79] text-xl font-e">Apertura del Baile</p>
        </div>
    </div>
</div>










<!-- SECCIÓN FOTOS -->
<section class="pt-10 px-4 sm:px-8" style="background-image: url('{{ asset('storage/fondo.jpg') }}');">
    <div class="text-center p-8 sm:p-16 md:p-20">
        <p class=" text-sky-950 text-3xl sm:text-4xl md:text-5xl font-pacifico ">Retratos de Nuestro Amor</p>
        <p class="font-e text-lg pt-2">Un minuto, un segundo, un instante que queda en la eternidad</p>
        <div class="pt-10 flex justify-center">
            <img width="100" height="100" src="https://img.icons8.com/clouds/100/camera.png" class="animated-icon" alt="camera"/>
        </div>
    </div>

    <div class="w-full relative">
    <!-- Contenedor Swiper -->
    <div class="swiper default-carousel swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="bg-gray-200 bg-opacity-80 rounded-10xl flex justify-center items-center">
                    <img src="{{ asset('storage/FotoPrimos.jpeg') }}" class="w-full rounded" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-10xl flex justify-center items-center">
                    <img src="{{ asset('storage/FotoPrimos.jpeg') }}" class="w-full rounded" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-10xl flex justify-center items-center">
                    <img src="{{ asset('storage/FotoPrimos.jpeg') }}" class="w-full rounded" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-10xl flex justify-center items-center">
                    <img src="{{ asset('storage/FotoPrimos.jpeg') }}" class="w-full rounded" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-indigo-50 rounded-10xl flex justify-center items-center">
                    <img src="{{ asset('storage/FotoPrimos.jpeg') }}" class="w-full rounded" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<p class="text-center text-gray-500 mt-2">Desliza a la izquierda para ver más imágenes</p>

</section>









<!-- DRESS CODE -->

<div class="py-36 px-14 max-w-md mx-auto text-center"   style="background-image: url('{{ asset('storage/fondo.jpg') }}');">
    <!-- Icons Section -->
    <div class="flex justify-center mb-4">
        <div class="w-16 h-16">
            <!-- Aquí iría el ícono del traje -->
            <img src="{{ asset('storage/ICONO-DRESS-CODE.png') }}" alt="Traje" class="mx-auto">
        </div>
    </div>
    
    <!-- Dress Code Title -->
    <h2 class="text-4xl text-sky-950 font-pacifico mb-2">Dress Code</h2>
    <p class="text-lg font-e mb-6">Código de Vestimenta</p>
    
    <div class="mt-5">
        <img src="{{ asset('storage/Horizontal-Line-PNG.png') }}" class="mb-4" alt="">
        <!-- Dress Code Options -->
        <div class="mb-6">
            <p class="text-2xl font-e  font-semibold">Etiqueta</p>
            <p class="text-4xl font-e font-bold">Formal</p>
            <p class="text-2xl font-e ">Semi-Formal</p>
            <p class="text-2xl font-e ">Casual</p>
        </div>

        <img src="{{ asset('storage/Horizontal-Line-PNG.png') }}" alt="">
    </div>
    
    
</div>




<!-- SECCION HOTELES --> 

<div class="bg-gray-50 p-8 py-36 max-w-md mx-auto rounded-lg shadow-md" style="background-image: url('{{ asset('storage/fondo.jpg') }}');">
  <!-- Icono Maleta -->
    <div class="flex justify-center mb-4">
        <div class="w-16 h-16">
            <!-- Aquí iría el ícono del traje -->
            <img src="{{ asset('storage/maleta.png') }}" alt="Traje" class="mx-auto">
        </div>
    </div>

  <!-- Título -->
  <h2 class="text-4xl text-center font-pacifico text-sky-950 mb-4">¿Te quedas a dormir?</h2>

  <!-- Texto Descriptivo -->
  <p class="text-center mt-5 mb-6 font-e">
    Genial!! Porque también tenemos un plan para los que queréis quedaros, te recomendamos los siguientes hoteles.
  </p>

  <!-- Lista de Hoteles -->
  <div class="space-y-4 mt-7">
    <!-- Hotel 1 -->
    <div class="text-center">
      <h3 class="text-lg ">Balneario San Nicolás</h3>
      <a href="https://balneariosannicolas.net">
        <button class="border-b-2 border-[#b39b79] hover:bg-[#9a8261] text-gray-900 py-2 mt-2 ">
            Ver Hotel
        </button>
      </a>
    </div>

    <!-- Hotel 2 -->
    <div class="text-center">
      <h3 class="text-lg ">Fonda Chiquito</h3>
      <a href="https://www.fondachiquito.es">
        <button class="border-b-2 border-[#b39b79] hover:bg-[#9a8261] text-gray-900 py-2 mt-2 ">
            Ver Hotel
        </button>
      </a>
    </div>

    <!-- Hotel 3 -->
    <!-- <div class="text-center">
      <h3 class="text-2xl font-secondary text-gray-700">Hotel 3</h3>
      <a href="">
        <button class="border-b-2 border-[#b39b79] hover:bg-[#9a8261] text-gray-900 py-2 px-6 mt-2 ">
            Ver Hotel
        </button>
      </a>
    </div> -->
  </div>
</div>




<!-- ALBUN DE BODA -->

<div class="bg-white p-8 py-36 max-w-lg text-center" style="background-image: url('{{ asset('storage/fondo.jpg') }}');">
    <h1 class="text-4xl font-pacifico text-sky-950 mb-6">Álbum de boda</h1>
    <p class="font-e mb-6">Os invitamos a nuestro Álbum de Boda.<br>
        Cada imagen que compartáis será un valioso recuerdo de felicidad y unión.</p>
    <p class="font-e mb-10">Por favor, añade tus fotos y ayuda a construir nuestro tesoro de recuerdos.</p>

    <div class="space-y-7 mt-7">
        <div class="text-center">
            <a href="{{ route('verSubirFotos') }}" class=" border-b-2 border-[#b39b79] hover:bg-[#9a8261] text-gray-900 py-2 mt-2 ">Subir Foto de Boda</a>
        </div>

        <div class="text-center">
            <a href="{{ route('verFotos') }}" class=" border-b-2 border-[#b39b79] hover:bg-[#9a8261] text-gray-900 py-2 mt-2 ">Ir Álbum de Boda</a>
        </div>
  </div>
        
        
</div>






<!-- SECCION DE FIESTAS CON LAS CANCIONES -->

<div class="text-center mt-14 py-36" style="background-image: url('{{ asset('storage/fondo.jpg') }}');">
    <div class="p-3">
        <!-- Título principal -->
         <h1 class="text-5xl font-pacifico text-gray-900 mb-6">Fiesta</h1>
        <p class="font-e mb-8">
            Hagamos juntos una fiesta única.<br>
            Os dejamos algunos detalles a tener en cuenta.
        </p>

        <!-- Sección Música -->
        <div class=" border-gray-900 p-8 max-w-md mx-auto">
            <h2 class="text-2xl font-pacifico mb-4">Música</h2>
            <div class="mb-4">
                <img width="128" height="128" src="https://img.icons8.com/pastel-glyph/128/music.png" class="h-12 w-12 text-amber-500 mx-auto mb-4" alt="music"/>
                <p class="font-e">¿Cuál es la canción que no debe faltar en la playlist de la fiesta?</p>
            </div>

            <button id="openModal" class="text-gray-900 border-b-2 border-[#b39b79] py-2 hover:bg-[#b39b79] transition-colors">
                Sugerir Canción
            </button>
        </div>
    </div>
</div>

<!-- Modal (inicialmente oculto) -->
<div id="suggestionModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden" >
    <div class="rounded-lg shadow-xl p-6 w-full max-w-lg">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Sugerir una Canción</h2>

        <form action="{{ route('cancion') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Campo para el nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre de la cancion</label>
                <input type="text" id="nombre" name="nombre" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Nombre" required>
            </div>

            <!-- Campo para la URL -->
            <div class="mb-4">
                <label for="url" class="block text-sm font-medium text-gray-700">Enlace de la Canción (opcional)</label>
                <input type="url" id="url" name="url" class="mt-1 block w-full p-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="https://ejemplo.com/cancion">
            </div>

            <!-- Botones de acción -->
            <div class="flex justify-end space-x-4">
                <button type="button" id="closeModal" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 transition-colors">Cancelar</button>
                <button type="submit" class="bg-sky-500 text-white py-2 px-4 rounded hover:bg-yellow-600 transition-colors">Enviar</button>
            </div>
        </form>
    </div>
</div>






<!-- CONFIRMAR ASISTENCIA -->

<div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('storage/fondo.jpg') }}');">
    <!-- Form Box -->
    <div class="p-8  rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-3xl  mb-6 text-center text-gray-800 font-pacifico">Confirmar Asistencia</h2>
        <p class="text-center mb-6 font-e">¡Ojalá contemos contigo! Por favor, completa el formulario y pulsa el botón para ayudarnos a contabilizar tu asistencia.</p>
        
        <form class="space-y-6" action="{{ route('confirmarAsistencia') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <!-- ¿Asistirás? -->
            <div>
                <label for="asistencia" class="block text-sm font-medium text-gray-700">¿Asistirás?</label>
                <select id="asistencia" name='asistencia' class="mt-1 p-1 block w-full border-2 border-gray-800 rounded-lg shadow-lg">
                    <option value="si">Sí, asistiré</option>
                    <option value="no">No, no asistiré</option>   
                </select>
            </div>

            <!-- Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name='nombre' class="mt-1 block w-full p-1 border-2 border-gray-800 rounded-lg shadow-lg" required>
            </div>

            <!-- Teléfono -->
            <div>
                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input type="tel" id="telefono" name='telefono' class="mt-1 block w-full border-2  p-1 border-gray-800 rounded-lg shadow-lg" required>
            </div>

            <!-- Botón para mostrar Especificaciones alimenticias -->
            <div>
                <button type="button" id="toggleEspecificaciones" class="mt-3 w-full text-gray-900 border-t-2 border-b-2 border-gray-900 p-2 ">
                    ¿Alguna especificación alimenticia?
                </button>
            </div>

            <!-- Especificaciones alimenticias (inicialmente oculto) -->
            <div id="especificacionesDiv" class="hidden mt-4">
                <label class="block text-sm font-medium text-gray-700">Especificaciones alimenticias</label>
                <input type="text" id="alimenticia" name='alimenticia' class="mt-1 block w-full border-2 text-center p-1 border-gray-800 rounded-lg shadow-lg">
            </div>

            <!-- Número de invitados -->
            <div>
                <label for="invitados" class="block text-sm font-medium text-gray-700">Número de acompañantes</label>
                <select id="invitados" name="invitados" class="mt-1 p-1 block w-full border-2 text-center border-gray-800 rounded-lg shadow-lg">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>

            <!-- Contenedor para los invitados -->
            <div id="invitadosContainer" class="mt-4 space-y-4"></div>

            <div id="especificacionesDiv" class=" mt-4">
                <label class="block text-sm font-medium text-gray-700">¿Algún Dato Importante?</label>
                <textarea id="alimenticia" name='dato' rows="4" class="mt-1 block w-full border-2 p-1 border-gray-800 rounded-lg shadow-lg"></textarea>
            </div>



            <div>
                <button type="submit" class="w-full text-gray-900 py-2 px-4 border-y-2 border-gray-900 shadow-lg hover:bg-gray-300 hover:text-white transition duration-300">
                    Confirmar Asistencia
                </button>
            </div>
            
        </form>
    </div>
</div>







<!-- DESPEDIDA GRACIAS -->


<div class="flex flex-col items-center justify-center py-12 bg-white text-center">
  <!-- Nombres -->
  <div class="text-4xl font-secondary text-gray-800">
    <p>Miguel</p>
  </div>
  
  <!-- Icono de corazón -->
  <div class="mt-2 text-2xl text-gray-900">
    <span>♥</span>
  </div>
  
  <!-- Nombre de la pareja -->
  <div class="text-4xl font-secondary text-gray-800 mt-2">
    <p>Jennifer</p>
  </div>

  <!-- Línea divisoria -->
  <!-- <div class="w-full my-6 border-t border-gray-300"></div> -->

  <!-- Mensaje de agradecimiento -->
  <div class="text-lg text-gray-700 my-12">
    <p class="font-secondary">GRACIAS</p>
    <p>por acompañarnos en un día tan especial</p>
  </div>
</div>

















<video id="video" width="0" height="0" autoplay controls loop>
  <source src="{{ asset('storage/video.mp4') }}" type="video/mp4">
  Tu navegador no soporta el elemento de video.
</video>




<script>
    // Obtener los elementos
    const openModalBtn = document.getElementById('openModal');
    const closeModalBtn = document.getElementById('closeModal');
    const suggestionModal = document.getElementById('suggestionModal');

    // Abrir modal
    openModalBtn.addEventListener('click', () => {
        suggestionModal.classList.remove('hidden');
    });

    // Cerrar modal
    closeModalBtn.addEventListener('click', () => {
        suggestionModal.classList.add('hidden');
    });

    // También puedes cerrar el modal haciendo clic fuera del contenido del modal
    window.addEventListener('click', (e) => {
        if (e.target === suggestionModal) {
            suggestionModal.classList.add('hidden');
        }
    });
</script>

<script>
    // Mostrar/Ocultar Especificaciones alimenticias
    document.getElementById('toggleEspecificaciones').addEventListener('click', function() {
        var especificacionesDiv = document.getElementById('especificacionesDiv');
        especificacionesDiv.classList.toggle('hidden');
    });

    // Generar campos de invitados
    document.getElementById('invitados').addEventListener('change', function() {
        var numInvitados = parseInt(this.value);
        var invitadosContainer = document.getElementById('invitadosContainer');
        invitadosContainer.innerHTML = ''; 

        for (var i = 1; i <= numInvitados; i++) {
            var invitadoDiv = document.createElement('div');
            invitadoDiv.classList.add('border', 'border-gray-800', 'p-4', 'rounded-lg', 'shadow-lg');
            invitadoDiv.innerHTML = `
                <h3 class="text-lg font-medium text-gray-900">Acompañante ${i}</h3>
                <div class="mt-2">
                    <label for="nombre-acompañante-${i}" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" id="nombre-acompañante-${i}" name='nombreInvitado${i}' class="mt-1 p-1 block w-full border-2 border-gray-800 rounded-lg shadow-lg" required>
                </div>
                <!-- Especificaciones alimenticias -->
                <div id="especificacionesDiv" class=" mt-4">
                    <label class="block text-sm font-medium text-gray-700">¿Alguna especificación alimenticia?</label>
                    <input type="text" id="alimenticia" name='especificacionesInvitado${i}' class="mt-1 block w-full border-2 text-center p-1 border-gray-800 rounded-lg shadow-lg" >
                </div>
            `;
            invitadosContainer.appendChild(invitadoDiv);
            
        }
    });
</script>


        
        
        <script>
            var swiper = new Swiper(".default-carousel", {
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
    </section>


  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    // Initialize Swiper
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      // Other Swiper options can be added here
    });
  </script>

    

    <script>

        // CONTADOR
        //===
// VARIABLES
//===
const DATE_TARGET = new Date('05/31/2025 12:00 AM');
// DOM for render
const SPAN_DAYS = document.querySelector('span#days');
const SPAN_HOURS = document.querySelector('span#hours');
const SPAN_MINUTES = document.querySelector('span#minutes');
const SPAN_SECONDS = document.querySelector('span#seconds');
// Milliseconds for the calculations
const MILLISECONDS_OF_A_SECOND = 1000;
const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

//===
// FUNCTIONS
//===

/**
 * Method that updates the countdown and the sample
 */
function updateCountdown() {
    // Calcs
    const NOW = new Date()
    const DURATION = DATE_TARGET - NOW;
    const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
    const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
    const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
    const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
    // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

    // Render
    SPAN_DAYS.textContent = REMAINING_DAYS;
    SPAN_HOURS.textContent = REMAINING_HOURS;
    SPAN_MINUTES.textContent = REMAINING_MINUTES;
    SPAN_SECONDS.textContent = REMAINING_SECONDS;
}

//===
// INIT
//===
updateCountdown();
// Refresh every second
setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
        

    </script>


<!-- JavaScript para manejar los modales -->
<script>
    document.querySelectorAll('.open-modal').forEach(button => {
        button.addEventListener('click', function () {
            const modalId = this.dataset.modal;
            document.getElementById(modalId).classList.remove('hidden');
        });
    });

    document.querySelectorAll('.close-modal').forEach(button => {
        button.addEventListener('click', function () {
            this.closest('.fixed').classList.add('hidden');
        });
    });

    // Cerrar modal al hacer clic fuera del contenido
    document.querySelectorAll('.fixed').forEach(modal => {
        modal.addEventListener('click', function (e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    });
</script>





<!-- FOOTER -->

    <!-- Icono Font Awesome centrado en la parte inferior y animado -->
    <i class="fa-solid fa-angle-down text-sky-950 text-3xl cursor-pointer z-100 fixed bottom-4 left-1/2 transform -translate-x-1/2 scroll-to-bottom"></i>
</body>
</html>

