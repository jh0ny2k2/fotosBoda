<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Main Content -->
<div class="flex-grow">

<div class="text-center">
    <a href="{{ route('welcome') }}">
        <button class="mt-6 px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Ir a Invitacion
        </button> 
    </a>
</div>

<h1 class="text-4xl text-center font-bold mb-6 mt-4 pb-4 border-b-2 border-blue-600">Opciones</h1>

            <div class="grid grid-cols-1 gap-6 p-6">
                <!-- INVITADOS -->
                <a href="{{ route('verInvitaciones') }}" class="shadow-xl border border-gray-500 py-16 rounded-lg flex flex-col items-center justify-center bg-white p-6 hover:bg-blue-100 transition-colors">
                    <span class="material-icons text-blue-500 text-6xl">people</span>
                    <p class="text-gray-800 text-xl">Invitaciones</p>
                </a>

                <!-- CANCIONES -->
                <a href=" {{ route('verCanciones') }}" class="shadow-xl border border-gray-500 rounded-lg flex py-16 flex-col items-center justify-center bg-white p-6 hover:bg-blue-100 transition-colors">
                    <span class="material-icons text-blue-500 text-6xl">music_note</span>
                    <p class="text-gray-800 text-xl">Canciones</p>
                </a>

                <!-- CANCIONES -->
                <a href=" {{ route('admin') }}" class="shadow-xl border border-gray-500 rounded-lg flex py-16 flex-col items-center justify-center bg-white p-6 hover:bg-blue-100 transition-colors">
                    <span class="material-icons text-blue-500 text-6xl">liquor</span>
                    <p class="text-gray-800 text-xl">Bebidas</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>