<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Fotos</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <style>
        .font-secondary {
            font-family: 'Dancing Script', cursive;
        }

        #myModal {
            display: none;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-screen h-screen flex items-center justify-center bg-amber-50">
    <div class="text-center p-8">
        <h1 class="text-4xl text-sky-900 font-secondary mb-4">¿Quieres contribuir al álbum de la boda?</h1>
        <h2 class="text-lg text-gray-700 mb-8 font-e">Sigue estos sencillos pasos para compartir tus fotos:</h2>
        <div class="instructions mb-10">
        <h2 class="text-2xl text-sky-800 font-secondary mb-4">Instrucciones:</h2>
        <ol class="list-decimal list-inside text-left text-gray-700 space-y-2">
            <li>Haz clic en el botón que aparece más abajo.</li>
            <li>Selecciona la opción "Subir".</li>
            <li>Regístrate utilizando tu cuenta de Google o Apple.</li>
            <li>Elige las fotos desde tu dispositivo móvil o tu ordenador.</li>
            <li>Haz clic en el botón "Subir".</li>
            <li>¡Listo! Tus fotos se añadirán automáticamente al álbum de la boda.</li>
        </ol>
        </div>
        <div class="recommendations mb-10">
        <h2 class="text-2xl text-sky-800 font-secondary mb-4">Recomendaciones:</h2>
        <ul class="list-disclist-inside text-left text-gray-700 space-y-2">
            <li>Inicia sesión como pareja o familia utilizando una única cuenta de Google o Apple.</li>
            <li>Asegúrate de que las fotos tengan buena calidad para que luzcan increíbles en el álbum.</li>
        </ul>
        </div>





        <a href="https://web.dotstheapp.com/a?groupId=1536344&code=6nF5eghR&dlBy=miguelyjenni"><button class="border-2 font-bold  border-gray-900 px-4 py-2 rounded-xl">Subir Foto</button></a>
    </div>

    <!-- Modal -->
    <div id="myModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg text-center w-96">
        <h2 class="text-3xl font-secondary text-sky-900 mb-4">Sube tus fotos</h2>
        <form id="subirFoto" action="{{ route('subirFoto') }}" method="POST" class="mb-6" enctype="multipart/form-data">
            @csrf
            <p class="mb-6">Elige tus fotos para subir:</p>
            <input type="file" name="foto[]" multiple class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-blue-100 mb-6">
            <button type="submit" class="border-2 border-gray-900 text-gray-900 font-bold px-4 py-2 rounded-lg">Subir Fotos</button>
        </form>
    </div>
</div>


    <script>
        // Función para abrir el modal
        function openModal() {
            document.getElementById("myModal").style.display = "flex";
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
</body>
</html>