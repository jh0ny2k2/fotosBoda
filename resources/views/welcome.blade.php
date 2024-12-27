<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITULO E ICONO DE LA PÇAGINA-->
    <title>Miguel & Jenni</title>
    <link rel="icon" href="{{ asset('storage/logoooo.png') }}" type="image/png">

    <!-- CDN TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=New+Amsterdam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

    <!-- CDN ZMDI ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- CDN FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- ESTILOS EXTRAS -->
    <style>
    
        #recommendationScreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            text-align: center;
            font-size: 1.5rem;
            padding: 20px;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            /* Desplazamiento suave */
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

        .font-ser {
            font-family: "DM Serif Display", serif;
            font-weight: 400;
            font-style: normal;
        }

        .scroll-to-bottom {
            animation: bounce 2s infinite;
            /* Animación de rebote */
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
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

        .volume-slider {
            -webkit-appearance: none;
            height: 2px;
            background: #8B4513;
        }

        .volume-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 12px;
            height: 12px;
            background: #8B4513;
            border-radius: 50%;
            cursor: pointer;
        }

        .volume-slider::-moz-range-thumb {
            width: 12px;
            height: 12px;
            background: #8B4513;
            border-radius: 50%;
            cursor: pointer;
            border: none;
        }

        #toggleMusic {
            position: fixed;
            top: 16px;
            right: 16px;
            display: block;
            /* Asegura que el botón esté visible */
            z-index: 40;
            /* Debajo del modal (z-index 50) */
        }

        /* Animación de pulso */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Clase de animación */
        .pulse {
            animation: pulse 1s ease;
        }
    </style>
</head>

<body style="background-image: url('{{ asset('storage/mapafondo.png') }}'); background-size: cover;">

<div id="recommendationScreen" class="font-secondary">
        <div class="fixed inset-0 bg-[#b39b79] bg-opacity-90 flex flex-col items-center justify-center text-center p-6">
            <img src="{{ asset('storage/logoooo.png') }}" class="w-52 h-52" alt="Logo Boda">
            <p>Para una mejor inmersión, <br> recomendamos ver esta página desde un dispositivo móvil o tablet.</p>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Verificar si el ancho de la pantalla es mayor a 1024 píxeles (escritorio)
            if (window.innerWidth > 1024) {
                // Mantener la pantalla de recomendación visible en dispositivos de escritorio
                document.getElementById("recommendationScreen").style.display = "flex";
            } else {
                // Ocultar la pantalla de recomendación en dispositivos móviles y tablets
                document.getElementById("recommendationScreen").style.display = "none";
            }
        });

        // Actualizar la pantalla de recomendación al cambiar el tamaño de la ventana
        window.addEventListener("resize", function() {
            if (window.innerWidth > 1024) {
                document.getElementById("recommendationScreen").style.display = "flex";
            } else {
                document.getElementById("recommendationScreen").style.display = "none";
            }
        });
    </script>

    <!-- MODAL DE BIENVENIDA PARA PONER MUSICA O NO -->
    <div id="musicModal" class="fixed inset-0 flex items-center justify-center bg-[#b39b79] bg-opacity-95 z-50">
        <div class="rounded-lg text-center  w-full p-6 flex flex-col items-center">
            <img src="{{ asset('storage/logoooo.png') }}" class="p-4 w-80 h-80 mb-4" alt="Logo Boda">
            <!-- <h2 class="text-4xl font-serif font-bold  mb-4">Bienvenidos a la invitación de <br> Miguel y Jenni</h2>
            <p class=" mt-4 mb-10">La música es parte de la experiencia</p> -->
            <button id="withMusic" class="w-full py-2 border-b-2 border-gray-950  font-medium mb-3 text-xl">INGRESAR CON MÚSICA</button>
            <button id="withoutMusic" class="w-full py-2 border-b-2 border-gray-950  font-medium text-xl">INGRESAR SIN MÚSICA</button>
        </div>
    </div>


    <!-- REPRODUCTOR DEL AUDIO -->
    <audio id="audio" src="{{ asset('storage/musica.mp3') }}" preload="auto"></audio>

    <!-- BOTON PARA AUDIO -->
    <button id="toggleMusic" class="fixed top-4 right-4 p-3 bg-[#b39b79] text-white rounded-full shadow-lg z-40">
        <img id="musicIcon" src="{{ asset('storage/sonido.gif') }}" alt="Control de Música" class="w-6 h-6">
    </button>

    <!-- SCRIPT PARA MUSICA -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const musicModal = document.getElementById('musicModal');
            const withMusicBtn = document.getElementById('withMusic');
            const withoutMusicBtn = document.getElementById('withoutMusic');
            const audio = document.getElementById('audio');
            const toggleMusicBtn = document.getElementById('toggleMusic');
            const musicIcon = document.getElementById('musicIcon');

            // Mostrar el modal cuando se carga la página
            musicModal.style.display = 'flex';

            // Si se hace clic en "INGRESAR CON MÚSICA"
            withMusicBtn.addEventListener('click', () => {
                audio.volume = 0.5; 
                audio.play().catch(error => {
                    console.error("La reproducción automática ha sido bloqueada:", error);
                });
                musicModal.style.display = 'none';
                musicIcon.src = "{{ asset('storage/sonido.gif') }}"; 
            });

            // Si se hace clic en "INGRESAR SIN MÚSICA"
            withoutMusicBtn.addEventListener('click', () => {
                audio.pause();
                musicModal.style.display = 'none';
                musicIcon.src = "{{ asset('storage/silencio.gif') }}"; 
            });

            // Función para alternar la música cuando se hace clic en el botón de control
            toggleMusicBtn.addEventListener('click', () => {
                if (audio.paused) {
                    audio.play().catch(error => {
                        console.error("Error al iniciar la música:", error);
                    });
                    musicIcon.src = "{{ asset('storage/sonido.gif') }}"; 
                } else {
                    audio.pause();
                    musicIcon.src = "{{ asset('storage/silencio.gif') }}"; 
                    audio.pause();
                }
            });

            // Añadir clase para animación cada 10 segundos
            setInterval(() => {
                toggleMusicBtn.classList.add('pulse');
                setTimeout(() => {
                    toggleMusicBtn.classList.remove('pulse');
                }, 1000); 
            }, 10000); 
        });
    </script>



    <!-- BANNER PRINCIPAL -->
    <div class="relative sm:p-16 md:p-20 bg-center bg-gray-200" style="background-image: url('{{ asset('storage/fondo inicio.png') }}'); ">
        <div class="relative p-6 z-10 flex flex-col items-center justify-center h-full text-center text-white">

            <!-- GIF AVION -->
            <img src="{{ asset('storage/avion.gif') }}" class="w-16 h-16" alt="Avión animado">

            <!-- IMAGEN PRINCIPAL -->
            <img src="{{ asset('storage/bodorrio.png') }}" class="py-2" alt="Bodorrio">
        </div>
        
        
    </div>



    <section class="flex flex-col items-center justify-center relative">
    <!-- Imagen de invitación -->
    <div class="mb-6 w-full max-w-lg">
        <img class="rounded-lg w-full" src="{{ asset('storage/invitacion.png') }}" alt="Invitación de boda">
    </div>
    
    <!-- Contador -->
    <div class="py-20 mt-20 relative w-full max-w-lg p-8 rounded-lg overflow-hidden">
        <!-- Fondo con imagen y semi-transparencia -->
        <div class="absolute inset-0 bg-cover bg-center " 
             style="background-image: url('{{ asset('storage/reloj.png') }}');"></div>
        <!-- <div class="absolute inset-0 bg-white/70"></div> -->
        
        <!-- Contenido del contador -->
        <div class="relative text-center text-gray-800 z-10 pt-28">
            <h2 class="font-secondary text-3xl sm:text-4xl font-bold text-gray-200 mb-4">Quedan...</h2>
            
            <!-- Contador en filas organizadas -->
            <div class="grid grid-cols-4 gap-4">
                <!-- Días -->
                <div class="flex flex-col items-center">
                    <span id="days" class="text-4xl sm:text-5xl font-extrabold text-gray-200">155</span>
                    <span class="text-sm text-gray-200">Días</span>
                </div>
                <!-- Horas -->
                <div class="flex flex-col items-center">
                    <span id="hours" class="text-4xl sm:text-5xl font-extrabold text-gray-200">03</span>
                    <span class="text-sm text-gray-200">Horas</span>
                </div>
                <!-- Minutos -->
                <div class="flex flex-col items-center">
                    <span id="minutes" class="text-4xl sm:text-5xl font-extrabold text-gray-200">26</span>
                    <span class="text-sm text-gray-200">Minutos</span>
                </div>
                <!-- Segundos -->
                <div class="flex flex-col items-center">
                    <span id="seconds" class="text-4xl sm:text-5xl font-extrabold text-gray-200">50</span>
                    <span class="text-sm text-gray-200">Segundos</span>
                </div>
            </div>
        </div>
    </div>
</section>







    <!-- SECCIÓN INFORMACIÓN -->
    <section class="py-24 ">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
                <div class="flex flex-col items-center">
                    <div class="mb-4">
                        
                        <!-- IMAGEN PARA SECCION -->
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/around-the-globe.png" alt="around-the-globe" />
                    </div>

                    <!-- INFORMACION DE LA SECCION -->
                    <h3 class="text-3xl text-sky-950 font-pacifico mb-4">La Celebración</h3>
                    <p class="text-2xl font-e text-center font-bold text-[#b39b79]  mt-10 ">Salones Drako</p>
                    <p class="text-lg text-center mb-6 font-e">Carretera Gador-Laujar, Alhama de Almería</p>
                    <p class="text-lg text-center mb-8 font-e">31 de Mayo a las 12:00 h</p>

                    <!-- ENLACE DIRECTO A GOOGLE MAPS -->
                    <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0xd700c912e7d8be9:0x3b966fc438429562?sa=X&ved=1t:8290&ictx=111" class=" text-sky-950 border-b-2 border-yellow-600 py-3 text-lg ">Ver ubicación</a>
                </div>
            </div>
        </div>
    </section>



    <!-- SECCIÓN ITINERARIO -->
    <div class="py-16 px-4 mb-12 sm:px-8 md:px-16 flex flex-col items-center">
        <h3 class="text-4xl text-sky-950 font-pacifico mb-4">Itinerario</h3>

        <!-- CEREMONIA -->
        <div class="flex flex-col items-center relative mb-12">
            <div class="p-4 mt-5">
                <img src="{{ asset('storage/ceremonia.gif') }}" alt="Ceremonia" class="w-12 h-12">
            </div>
            <div class="text-center mb-4">
                <p class="text-sky-900 text-lg font-e">12:00 h</p>
                <p class="text-[#b39b79] text-xl font-bold  font-e">Ceremonia</p>
            </div>
            <div class="h-16 w-1 bg-[#082F49] absolute top-full"></div>
        </div>

        <!-- COCTEL DE BIENVENIDA -->
        <div class="flex flex-col items-center relative mb-12">
            <div class="p-4 mt-5">
                <img src="{{ asset('storage/drink.gif') }}" alt="Cóctel de Bienvenida" class="w-12 h-12">
            </div>
            <div class="text-center mb-4">
                <p class="text-sky-900 text-lg font-e">13:00 h</p>
                <p class="text-[#b39b79]  font-bold  text-2xl font-e">Cóctel de Bienvenida</p>
            </div>
            <div class="h-16 w-1 bg-[#082F49] absolute top-full"></div>
        </div>

        <!-- COMIDA -->
        <div class="flex flex-col items-center relative mb-12">
            <div class="p-4 mt-5">
                <img src="{{ asset('storage/comida.gif') }}" alt="Comida" class="w-14 h-14">
            </div>
            <div class="text-center mb-4">
                <p class="text-sky-900 text-lg font-e">14:30 h</p>
                <p class="text-[#b39b79] font-bold  text-2xl font-e">Comida</p>
            </div>
            <div class="h-16 w-1 bg-[#082F49] absolute top-full"></div>
        </div>

        <!-- BARRA LIBRE -->
        <div class="flex flex-col items-center relative mb-12">
            <div class="p-4 mt-5">
                <img src="{{ asset('storage/barraLibre.gif') }}" alt="Comida" class="w-14 h-14">
            </div>
            <div class="text-center mb-4">
                <p class="text-sky-900 text-lg font-e">18:00 h</p>
                <p class="text-[#b39b79] font-bold  text-2xl font-e">Barra Libre</p>
            </div>
            <div class="h-16 w-1 bg-[#082F49] absolute top-full"></div>
        </div>

        <!-- CENA -->
        <div class="flex flex-col items-center relative">
            <div class="p-4 mt-5">
                <img src="{{ asset('storage/cena.gif') }}" alt="Cóctel de Bienvenida" class="w-12 h-12">
            </div>
            <div class="text-center">
                <p class="text-sky-900 text-lg font-e">21:30 h</p>
                <p class="text-[#b39b79] font-bold  text-2xl font-e">Cena</p>
            </div>
        </div>
    </div>

    
    <!-- SECCION DE FIESTAS CON LAS CANCIONES -->
    <div class="text-center py-18">
        <div class="p-3">
            <h1 class="text-4xl text-sky-950 font-pacifico mb-4">Fiesta</h1>
            <p class="font-e mb-8">
                Hagamos juntos una fiesta única.<br>
                Os dejamos algunos detalles a tener en cuenta.
            </p>

            <div class="p-5">
                <!-- SECCION DE MUSICA -->
                <div class="py-4 px-8 rounded-xl max-w-md mx-auto">
                    <h2 class="text-3xl font-secondary font-bold mb-4">Música</h2>
                    <div class="mb-4">
                        <img width="128" height="128" src="https://img.icons8.com/pastel-glyph/128/music.png" class="h-16 w-16 text-amber-500 mx-auto mb-4" alt="music" />
                        <p class="font-e">¿Cuál es la canción que no debe faltar en la playlist de la fiesta?</p>
                    </div>

                    <!-- BOTON PARA ABRIR MODAL DE SUGERIR MUSICA -->
                    <button id="openModal" class="text-gray-900 border-b-2 border-[#b39b79] py-2 transition-colors">
                        Sugerir Canción
                    </button>
                </div>

                <!-- SECCION DE DRESS CODE -->
                <div class="py-8 px-8 mt-8 rounded-xl max-w-md mx-auto">
                    <h2 class="text-3xl font-secondary font-bold mb-8">Bebidas</h2>
                    <div class="mb-4">
                        <img width="140" height="140" src="https://img.icons8.com/ios/50/cocktail.png" class="h-16 w-16 text-amber-500 mx-auto mb-4" alt="dress-code-icon" />
                        <p class="font-e">Nunca es tarde para un buen café, <br> ni muy temprano para una copa</p>
                    </div>

                    <!-- BOTON PARA ABRIR EL MODAL DE DRESS CODE -->
                    <button id="openDressCodeModal" class="text-gray-900 border-b-2 border-[#b39b79] py-2 transition-colors">
                        Sugerir Bebida
                    </button>
                </div>
            </div>

            <!-- MODAL DE DRESS CODE -->
            <div id="dressCodeModalContainer" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                <div class="relative rounded-xl shadow-2xl p-6 w-full max-w-lg bg-white transform transition-all duration-300 ease-in-out scale-95">
                    <button id="closeDressCodeModal" class="absolute top-4 right-4 text-gray-900 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16">
                            <img src="{{ asset('storage/ICONO-DRESS-CODE.png') }}" alt="Traje" class="mx-auto">
                        </div>
                    </div>

                    <h2 class="text-2xl text-gray-950 font-pacifico mb-2">Dress Code</h2>
                    <p class="text-lg font-e mb-6">Código de Vestimenta</p>

                    <div class="mt-5">
                        <img src="{{ asset('storage/Horizontal-Line-PNG.png') }}" class="mb-4" alt="horizontal-line" />
                    
                        <div class="mb-6 text-center">
                            <p class="text-xl font-e font-semibold">Etiqueta</p>
                            <p class="text-3xl font-e font-bold">Formal</p>
                            <p class="text-xl font-e">Semi-Formal</p>
                            <p class="text-xl font-e">Casual</p>
                        </div>

                        <img src="{{ asset('storage/Horizontal-Line-PNG.png') }}" alt="horizontal-line" />
                    </div>
                </div>
            </div>

            <!-- Script para abrir y cerrar el modal -->
            <script>
                // Obtener elementos del DOM
                const openDressCodeModalButton = document.getElementById('openDressCodeModal');
                const closeDressCodeModalButton = document.getElementById('closeDressCodeModal');
                const dressCodeModalContainer = document.getElementById('dressCodeModalContainer');

                // Abrir el modal al hacer clic en el botón
                openDressCodeModalButton.addEventListener('click', () => {
                    dressCodeModalContainer.classList.remove('hidden');
                });

                // Cerrar el modal al hacer clic en el botón de cerrar
                closeDressCodeModalButton.addEventListener('click', () => {
                    dressCodeModalContainer.classList.add('hidden');
                });

                // Cerrar el modal si se hace clic fuera del contenido del modal
                window.addEventListener('click', (event) => {
                    if (event.target === dressCodeModalContainer) {
                        dressCodeModalContainer.classList.add('hidden');
                    }
                });
            </script>


               
        </div>
    </div>
    
    





    <!-- MODAL DE SECCION DE MUSICA -->
    <div id="suggestionModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="relative rounded-xl shadow-2xl p-6 w-full max-w-lg bg-white transform transition-all duration-300 ease-in-out scale-95">

            <button id="closeModal" class="absolute top-4 right-4 bg-white rounded-full p-2 border border-gray-300 shadow-lg text-sky-900 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <img width="128" height="128" src="https://img.icons8.com/pastel-glyph/128/music.png" class="h-16 w-16 text-amber-500 mx-auto mb-4" alt="music" />

            <h2 class="text-4xl font-pacifico text-gray-800 mb-6 text-center">Sugerir Canción</h2>

            <form action="{{ route('cancion') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-5">
                    <input type="text" id="cancion" name="cancion" placeholder="Nombre canción y autor" class="text-center text-sm w-full p-3 border-b border-gray-200 focus:ring-sky-500 focus:border-sky-500 transition-all duration-200" required>
                </div>

                <div class="mb-5">
                    <input type="url" id="url" name="url" placeholder="Si quieres pon el link de YouTube, Spotify, etc." class="text-center text-sm w-full p-3 border-b border-gray-200 focus:ring-sky-500 focus:border-sky-500 transition-all duration-200">
                </div>

                <div class="flex justify-center mt-4">
                    <button type="submit" class=" text-gray-900 py-2 border-b-2 border-sky-900  transition-colors duration-200">Sugerir Canción</button>
                </div>
            </form>
        </div>
    </div>



    <!-- SECCIÓN FOTOS -->
    <section class="pb-32 px-4 sm:px-8" >
        <!-- style="background-image: url('{{ asset('storage/fondo1.png') }}'); background-size: cover;" -->
        <div class="text-center p-8 sm:p-16 md:p-20">
            <div class="pt-10 flex justify-center pb-5">
                <img width="100" height="100" src="https://img.icons8.com/clouds/100/camera.png" class="animated-icon" alt="camera" />
            </div>

            <p class=" text-3xl text-sky-950 font-pacifico mb-4">Nuestra Historia de Amor</p>
            <!-- <p class="font-e text-lg pt-2">Un minuto, un segundo, un instante que queda en la eternidad</p> -->
        </div>

        <div class="max-w-3xl mx-auto p-4">
        <!-- Timeline container con línea vertical -->
        <div class="relative py-8 px-4">
            <!-- Línea vertical -->
            <div class="absolute left-4 top-0 bottom-0 w-px bg-gray-200"></div>
            
            <!-- Elementos del timeline -->
            <div class="space-y-12">
                <!-- Primer evento -->
                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-lg shadow-[#beb9b2] overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/1,1.jpg') }}" 
                                 alt="Primera reunión" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950" ><span class="text-[#b39b79] ">Julio</span> 2009</div>
                            <h3 class="text-gray-700 font-e text-xl font-medium mb-2 text-sky-950">Nos conocimos siendo solo unos niños</h3>
                        </div>
                    </div>
                </div>

                

                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2]  overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/3,1.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Junio</span> 2015</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 font-e text-sky-950">Juntos crecimos ...</h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2] overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/4,1.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Junio</span> 2016</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 font-e text-sky-950">Y descubrimos ...</h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2]  overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/5.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Junio</span> 2016</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 font-e text-sky-950">Entre otras cosas ...</h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2] overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/6,1.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Enero</span> 2017</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 font-e text-sky-950">Nuestra pasión por viajar</h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/7.jpeg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2"><span class="text-[#b39b79] ">Mayo</span> 2018</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2"></h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2]  overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/9,1.jpeg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Julio</span> 2018</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 text-sky-950"></h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2]  overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/10.jpeg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Diciembre</span> 2019</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 text-sky-950"></h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2]  overflow-hidden max-w-sm">
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/11.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Julio</span> 2023</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 font-e text-sky-950"></h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2] overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/8.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Noviembre</span> 2023</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 text-sky-950"></h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2] overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/15.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Julio</span> 2020</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 font-e text-sky-950">Tras muchas experiencias comenzamos una nueva etapa</h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2] overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/2.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Junio</span> 2021</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 font-e text-sky-950">Pronto la familia aumentó ...</h3>
                        </div>
                    </div>
                </div>

                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2]  overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/12,1.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 text-lg font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Diciembre</span> 2023</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 font-e text-sky-950 ">Aunque no de la forma que muchos esperabais</h3>
                        </div>
                    </div>
                </div>


                <div class="relative pl-8 mb-12">
                    <!-- Círculo rosa (corazón) -->
                    <div class="absolute left-0 -translate-x-1/2 w-8 h-8 rounded-full bg-[#8f7b60] flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full text-center text-red bg-[#b39b79]"><i class="zmdi zmdi-favorite"></i></div>
                    </div>
                    
                    <!-- Tarjeta -->
                    <div class="bg-white rounded-lg shadow-md shadow-[#beb9b2]  overflow-hidden max-w-sm">
                        <!-- Imagen -->
                        <div class="w-full h-48 overflow-hidden">
                            <img src="{{ asset('storage/14.jpg') }}" 
                                 alt="Días de invierno" 
                                 class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Contenido -->
                        <div class="p-4">
                            <div class="text-gray-500 font-bold font-e mb-2 text-sky-950"><span class="text-[#b39b79] ">Noviembre</span> 2023</div>
                            <h3 class="text-gray-700 text-xl font-medium mb-2 font-e text-sky-950">Y por fin ... 15 años despues, decidimos dar el gran paso!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>



    



    <!-- ALBUM DE BODA -->
    <div class="min-h-screen bg-cover bg-center relative" style="background-image: url('{{ asset('storage/novios.png') }}');">
    <!-- Semi-transparent overlay -->
    <div class="absolute inset-0 bg-white/60"></div>
    
    <!-- Content container -->
    <div class="relative p-8 min-h-screen flex flex-col items-center justify-center max-w-2xl mx-auto text-center">

        <!-- Main content -->
        <h1 class="text-4xl text-sky-950 font-pacifico mb-6">Álbum de boda</h1>
        
        <p class="text-gray-800 mb-4 max-w-md font-e">
            Os invitamos a nuestro Álbum de Boda.
            Cada imagen que compartáis será un valioso recuerdo de felicidad y unión.
        </p>
        
        <p class="text-gray-800 mb-8 max-w-md font-e">
            Por favor, añade tus fotos y ayuda a construir nuestro tesoro de recuerdos.
        </p>

        <!-- Buttons -->
        <div class="space-y-4 w-full max-w-xs">
            <a href="{{ route('verSubirFotos') }}" 
               class="block w-full text-center border-b-2 border-[#b39b79] hover:bg-[#b39b79] hover:text-white text-gray-900 py-3 px-6 transition-colors duration-200">
                Subir Foto de Boda
            </a>
            
            <a href="{{ route('verFotos') }}" 
               class="block w-full text-center border-b-2 border-[#b39b79] hover:bg-[#b39b79] hover:text-white text-gray-900 py-3 px-6 transition-colors duration-200">
                Ir Álbum de Boda
            </a>
        </div>
    </div>
</div>



    

    <!-- SECCION HOTELES -->
    <div class=" p-8 py-24 max-w-md mx-auto ">

        <div class="flex justify-center mb-4">
            <div class="w-16 h-16">
                <!-- ICONO DE LA MALETA -->
                <img src="{{ asset('storage/maleta.png') }}" alt="Traje" class="mx-auto">
            </div>
        </div>

        <h2 class="text-4xl text-sky-950 font-pacifico mb-4 text-center">¿Te quedas a dormir?</h2>

        <p class="text-center mt-5 mb-6 font-e">
            Genial!! Porque también tenemos un plan para los que queréis quedaros, te recomendamos los siguientes hoteles.
        </p>

        <!-- LISTA DE HOTELES -->
        <div class="space-y-4 mt-7">
            <!-- HOTEL 2 -->
            <div class="text-center">
                <h3 class="text-lg ">Balneario San Nicolás</h3>
                <a href="https://balneariosannicolas.net">
                    <button class="border-b-2 border-[#b39b79] hover:bg-[#9a8261] text-gray-900 py-2 mt-2 ">
                        Ver Hotel
                    </button>
                </a>
            </div>

            <!-- HOTEL 2 -->
            <div class="text-center">
                <h3 class="text-lg ">Fonda Chiquito</h3>
                <a href="https://www.fondachiquito.es">
                    <button class="border-b-2 border-[#b39b79] hover:bg-[#9a8261] text-gray-900 py-2 mt-2 ">
                        Ver Hotel
                    </button>
                </a>
            </div>
        </div>
    </div>



    <!-- CONFIRMAR ASISTENCIA -->
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center">
        <div class="p-8   rounded-lg w-full max-w-lg">
            <h2 class="text-4xl text-sky-950 font-pacifico mb-4 text-center">Confirmar Asistencia</h2>
            <p class="text-center mb-6 font-e">¡Ojalá contemos contigo! Por favor, completa el formulario y pulsa el botón para ayudarnos a contabilizar tu asistencia.</p>

            <form class="space-y-6" action="{{ route('confirmarAsistencia') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="asistencia" class="block text-sm font-medium text-gray-700">¿Asistirás?</label>
                    <select id="asistencia" name='asistencia' class="mt-1 p-1 block w-full border-2 border-gray-800 rounded-lg shadow-lg">
                        <option value="si">Sí, asistiré</option>
                        <option value="no">No, no asistiré</option>
                    </select>
                </div>

                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" id="nombre" name='nombre' class="mt-1 block w-full p-1 border-2 border-gray-800 rounded-lg shadow-lg" required>
                </div>

                <div>
                    <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                    <input type="tel" id="telefono" name='telefono' class="mt-1 block w-full border-2  p-1 border-gray-800 rounded-lg shadow-lg" required>
                </div>

                <div>
                    <button type="button" id="toggleEspecificaciones" class="mt-3 w-full text-gray-900 border-t-2 border-b-2 border-gray-900 p-2 ">
                        ¿Alguna especificación alimenticia?
                    </button>
                </div>

                <div id="especificacionesDiv" class="hidden mt-4">
                    <label class="block text-sm font-medium text-gray-700">Especificaciones alimenticias</label>
                    <input type="text" id="alimenticia" name='alimenticia' class="mt-1 block w-full border-2 text-center p-1 border-gray-800 rounded-lg shadow-lg">
                </div>

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
    <div class="flex flex-col items-center justify-center py-12 text-center">

        <div class="text-3xl font-pacifico text-gray-800 mt-4">
            <p>Miguel</p>
        </div>

        <div class="mt-2 text-2xl text-gray-900">
            <span>♥</span>
        </div>

        <div class="text-3xl font-pacifico text-gray-800 mt-2 mb-4">
            <p>Jenni</p>
        </div>

        <div class="w-80 my-6 border-t border-dashed border-[#b39b79]"></div>

        <div class="text-lg text-gray-700 mt-8 mb-4">
            <p class="font-secondary ">GRACIAS</p>
            <p class="font-e">por acompañarnos en un día tan especial</p>
        </div>
    </div>





















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
        const DATE_TARGET = new Date('05/31/2025 12:00 PM');
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
            button.addEventListener('click', function() {
                const modalId = this.dataset.modal;
                document.getElementById(modalId).classList.remove('hidden');
            });
        });

        document.querySelectorAll('.close-modal').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.fixed').classList.add('hidden');
            });
        });

        // Cerrar modal al hacer clic fuera del contenido
        document.querySelectorAll('.fixed').forEach(modal => {
            modal.addEventListener('click', function(e) {
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