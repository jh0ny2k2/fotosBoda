<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotos de boda</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <style>
        .font-secondary {
            font-family: 'Dancing Script', cursive;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Contenedor principal centrado y con espacio suficiente alrededor -->
    <div class="container mx-auto py-8 px-4">
        <h1 class="text-5xl font-secondary text-center mb-8 text-sky-700">Galería de Fotos</h1>

        <!-- Grid para las fotos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($fotos as $foto)
            <div>
                <!-- Imagen pequeña con evento click para abrir el modal -->
                <img class=" shadow-xl h-auto max-w-full rounded-lg cursor-pointer" src="{{ asset('storage/fotos/foto_' . $foto->id . '.jpg') }}"
                    alt="foto" data-modal-target="modal-{{ $foto->id }}" data-modal-toggle="modal-{{ $foto->id }}">
            </div>

            <!-- Modal -->
            <div id="modal-{{ $foto->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-[100vh] bg-black bg-opacity-75 flex items-center justify-center">
                <div class="relative w-full max-w-4xl">
                    <!-- Botón para cerrar -->
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="modal-{{ $foto->id }}">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a1 1 0 011 1v.01c0 .553-.447 1-.999 1H9a1 1 0 01-.99-.857L7.01 9.87A1 1 0 017.98 9h.02c.552 0 .999.447.999 1h.01A1 1 0 019 9a1 1 0 011 1V9zm0 4a1 1 0 011-1v.009a1 1 0 01-.99.9H9a1 1 0 01-1-.875L7.01 13.99a1 1 0 01.99-.99H8.99a1 1 0 011 .99H10a1 1 0 011 1zm-1-2a1 1 0 111 1 .997.997 0 01-1-.001V12zM3 5a1 1 0 00-2 0v10a1 1 0 002 0V5zm0 12a1 1 0 11-2 0 1 1 0 012 0zm2-2h12V7H5v8zm12-1H5V8h12v7z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Cerrar modal</span>
                    </button>

                    <!-- Contenido del modal -->
                    <div class="bg-white p-4 rounded-lg shadow">
                        <img class="w-full h-auto rounded-lg" src="{{ asset('storage/fotos/foto_' . $foto->id . '.jpg') }}" alt="foto ampliada">

                        <!-- Botón para descargar la foto -->
                        <a href="{{ asset('storage/fotos/foto_' . $foto->id . '.jpg') }}" download="foto_{{ $foto->id }}"
                            class="absolute top-3 right-12 text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">
                            <i class="zmdi zmdi-download"></i> Descargar
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
