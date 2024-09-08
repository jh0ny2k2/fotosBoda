<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- CONTENIDO -->
    <x-boton></x-boton>
<div class="flex-1 p-2 text-center">
    <h1 class="text-4xl font-bold mb-6 mt-6 pb-4 border-b-2 border-blue-600">Canciones</h1>

    <!-- TABLA DE CATEGORIAS -->
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">Url</th>
                </tr>
            </thead>
            <tbody>
                @foreach($canciones as $cancion)
                <tr class="bg-white border-b">
                    <td class="px-6 py-4">{{$cancion->nombre}}</td>
                    <td class="px-6 py-4"><a href="{{$cancion->url}}">{{$cancion->url}}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>