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
    

    <h1 class="text-4xl font-bold mb-6 mt-6 pb-4 border-b-2 border-blue-600">INVITADOS</h1>

    <div>
        <h1 class="text-3xl font-semibold text-blue-600">Asistentes</h1>
        <p class="text-gray-700">Hay un total de {{$numero->numero}} asistentes</p>
    
        @foreach ($invitados as $invitacion)

        <div class="pt-5">
            <div class="mt-6 w-96 border-2 border-blue-600 rounded-lg p-4 space-y-4 shadow-2xl">
                <h2 class="text-lg font-semibold text-blue-600 text-left">Asistente {{$invitacion->id}}</h2>
                
                <!-- Información principal del asistente -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                        <p class="font-semibold">Nombre</p>
                        <p>{{$invitacion->nombre}}</p>
                    </div>
                    <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                        <p class="font-semibold">Teléfono</p>
                        <p>{{$invitacion->telefono}}</p>
                    </div>
                    <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                        <p class="font-semibold">Alimentación</p>
                        <p>{{$invitacion->especificaciones}}</p>
                    </div>
                    <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                        <p class="font-semibold">Nº Invitados</p>
                        <p>1</p>
                    </div>
                </div>
                
                @if (!empty($invitacion->nombreInvitado1))
                <!-- Información de los invitados -->
                <div class="border-2 border-gray-900 rounded-lg p-4 space-y-4">
                    <h3 class="text-blue-600 font-semibold">Invitado 1</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Nombre</p>
                            <p>{{$invitacion->nombreInvitado1}}</p>
                        </div>
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Alimentación</p>
                            <p>{{$invitacion->especificacionesInvitado1}}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if (!empty($invitacion->nombreInvitado2))
                <!-- Información de los invitados -->
                <div class="border-2 border-gray-900 rounded-lg p-4 space-y-4">
                    <h3 class="text-blue-600 font-semibold">Invitado 2</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Nombre</p>
                            <p>{{$invitacion->nombreInvitado2}}</p>
                        </div>
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Alimentación</p>
                            <p>{{$invitacion->especificacionesInvitado2}}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if (!empty($invitacion->nombreInvitado3))
                <!-- Información de los invitados -->
                <div class="border-2 border-gray-900 rounded-lg p-4 space-y-4">
                    <h3 class="text-blue-600 font-semibold">Invitado 3</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Nombre</p>
                            <p>{{$invitacion->nombreInvitado3}}</p>
                        </div>
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Alimentación</p>
                            <p>{{$invitacion->especificacionesInvitado3}}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if (!empty($invitacion->nombreInvitado4))
                <!-- Información de los invitados -->
                <div class="border-2 border-gray-900 rounded-lg p-4 space-y-4">
                    <h3 class="text-blue-600 font-semibold">Invitado 4</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Nombre</p>
                            <p>{{$invitacion->nombreInvitado4}}</p>
                        </div>
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Alimentación</p>
                            <p>{{$invitacion->especificacionesInvitado4}}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if (!empty($invitacion->nombreInvitado5))
                <!-- Información de los invitados -->
                <div class="border-2 border-gray-900 rounded-lg p-4 space-y-4">
                    <h3 class="text-blue-600 font-semibold">Invitado 5</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Nombre</p>
                            <p>{{$invitacion->nombreInvitado5}}</p>
                        </div>
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Alimentación</p>
                            <p>{{$invitacion->especificacionesInvitado5}}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if (!empty($invitacion->nombreInvitado6))
                <!-- Información de los invitados -->
                <div class="border-2 border-gray-900 rounded-lg p-4 space-y-4">
                    <h3 class="text-blue-600 font-semibold">Invitado 6</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Nombre</p>
                            <p>{{$invitacion->nombreInvitado6}}</p>
                        </div>
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Alimentación</p>
                            <p>{{$invitacion->especificacionesInvitado6}}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if (!empty($invitacion->nombreInvitado7))
                <!-- Información de los invitados -->
                <div class="border-2 border-gray-900 rounded-lg p-4 space-y-4">
                    <h3 class="text-blue-600 font-semibold">Invitado 7</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Nombre</p>
                            <p>{{$invitacion->nombreInvitado7}}</p>
                        </div>
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Alimentación</p>
                            <p>{{$invitacion->especificacionesInvitado7}}</p>
                        </div>
                    </div>
                </div>
                @endif

                @if (!empty($invitacion->nombreInvitado8))
                <!-- Información de los invitados -->
                <div class="border-2 border-gray-900 rounded-lg p-4 space-y-4">
                    <h3 class="text-blue-600 font-semibold">Invitado 8</h3>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Nombre</p>
                            <p>{{$invitacion->nombreInvitado8}}</p>
                        </div>
                        <div class="border-2 border-blue-600 rounded-lg p-2 text-center">
                            <p class="font-semibold">Alimentación</p>
                            <p>{{$invitacion->especificacionesInvitado8}}</p>
                        </div>
                    </div>
                </div>
                @endif
                @if (!empty($invitacion->dato))
                <!-- Información de los invitados -->
                <div class="border-2 border-gray-900 rounded-lg p-4 space-y-4">
                    <h3 class="text-blue-600 font-semibold">Información Extra</h3>
                    
                    <p>{{$invitacion->dato}}</p>
                    
                </div>
                @endif
            </div>
        </div>

        <div class="pt-1 pb-1 mt-5  bg-blue-500"></div>
        @endforeach
    </div>
</div>
</body>
</html>