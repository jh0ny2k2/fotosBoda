<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin / Bebida</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- CONTENIDO -->
    <x-boton></x-boton>
<div class="flex-1 p-2 text-center">
    <h1 class="text-4xl font-bold mb-6 mt-6 pb-4 border-b-2 border-blue-600">Bebidas</h1>

    <!-- TABLA DE CATEGORIAS -->
    <div class="overflow-x-auto">
                @foreach($bebidas as $bebida)
                <!-- Información de los invitados -->
                <div class="mt-3 border-2 border-blue-600 rounded-lg p-4 space-y-4">
                    
                    <div class="gap-4">
                        <div class=" rounded-lg p-2 text-center">
                            <p class="font-semibold">Nombre de Bebida</p>
                            <p>{{$bebida->bebida}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
    </div>
</div>
</body>
</html>