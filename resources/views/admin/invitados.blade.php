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

    <!-- TABLA DE CATEGORIAS -->
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Asistencia</th>
                    <th scope="col" class="px-6 py-3">Nombre</th>
                    <th scope="col" class="px-6 py-3">telefono</th>
                    <th scope="col" class="px-6 py-3">alimentacion</th>
                    <th scope="col" class="px-6 py-3 border-r-2">Nº Invitados</th>

                    <th scope="col" class="px-6 py-3">Nombre invitado 1</th>
                    <th scope="col" class="px-6 py-3 border-r-2">alimentacion invitado 1</th>

                    <th scope="col" class="px-6 py-3">Nombre invitado 2</th>
                    <th scope="col" class="px-6 py-3 border-r-2">alimentacion invitado 2</th>

                    <th scope="col" class="px-6 py-3">Nombre invitado 3</th>
                    <th scope="col" class="px-6 py-3 border-r-2">alimentacion invitado 3</th>

                    <th scope="col" class="px-6 py-3">Nombre invitado 4</th>
                    <th scope="col" class="px-6 py-3 border-r-2">alimentacion invitado 4</th>

                    <th scope="col" class="px-6 py-3">Nombre invitado 5</th>
                    <th scope="col" class="px-6 py-3 border-r-2">alimentacion invitado 5</th>

                    <th scope="col" class="px-6 py-3">Nombre invitado 6</th>
                    <th scope="col" class="px-6 py-3 border-r-2">alimentacion invitado 6</th>

                    <th scope="col" class="px-6 py-3">Nombre invitado 7</th>
                    <th scope="col" class="px-6 py-3 border-r-2">alimentacion invitado 7</th>

                    <th scope="col" class="px-6 py-3">Nombre invitado 8</th>
                    <th scope="col" class="px-6 py-3 border-r-2">alimentacion invitado 8</th>

                    <th scope="col" class="px-6 py-3 border-r-2">Dato Extra</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invitados as $invitacion)
                <tr class="bg-white border-b">
                    <td scope="col" class="px-6 py-3">{{$invitacion->asistencia}}</td>
                    <td scope="col" class="px-6 py-3">{{$invitacion->nombre}}</td>
                    <td scope="col" class="px-6 py-3">{{$invitacion->telefono}}</td>
                    
                    @if (!empty($invitacion->especificacionesInvitado1))
                        <td scope="col" class="px-6 py-3">{{$invitacion->alimentacion}}</td>
                    @else 
                        <td scope="col" class="px-6 py-3">---</td>
                    @endif

                    <td scope="col" class="px-6 py-3 border-r-2">{{$invitacion->numeroInvitados}}</td>




                    @if (!empty($invitacion->nombreInvitado1))
                        <td scope="col" class="px-6 py-3">{{$invitacion->nombreInvitado1}}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 ">---</td>
                    @endif
                    
                    @if (!empty($invitacion->especificacionesInvitado1))
                        <td scope="col" class="px-6 py-3 border-r-2">{{ $invitacion->especificacionesInvitado1 }}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 border-r-2">---</td>
                    @endif




                    @if (!empty($invitacion->nombreInvitado2))
                        <td scope="col" class="px-6 py-3">{{$invitacion->nombreInvitado2}}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 ">---</td>
                    @endif
                    
                    @if (!empty($invitacion->especificacionesInvitado2))
                        <td scope="col" class="px-6 py-3 border-r-2">{{ $invitacion->especificacionesInvitado2 }}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 border-r-2">---</td>
                    @endif



                    @if (!empty($invitacion->nombreInvitado3))
                        <td scope="col" class="px-6 py-3">{{$invitacion->nombreInvitado3}}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 ">---</td>
                    @endif
                    
                    @if (!empty($invitacion->especificacionesInvitado3))
                        <td scope="col" class="px-6 py-3 border-r-2">{{ $invitacion->especificacionesInvitado3 }}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 border-r-2">---</td>
                    @endif

                    @if (!empty($invitacion->nombreInvitado4))
                        <td scope="col" class="px-6 py-3">{{$invitacion->nombreInvitado4}}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 ">---</td>
                    @endif
                    
                    @if (!empty($invitacion->especificacionesInvitado4))
                        <td scope="col" class="px-6 py-3 border-r-2">{{ $invitacion->especificacionesInvitado4 }}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 border-r-2">---</td>
                    @endif

                    @if (!empty($invitacion->nombreInvitado5))
                        <td scope="col" class="px-6 py-3">{{$invitacion->nombreInvitado5}}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 ">---</td>
                    @endif
                    
                    @if (!empty($invitacion->especificacionesInvitado5))
                        <td scope="col" class="px-6 py-3 border-r-2">{{ $invitacion->especificacionesInvitado5 }}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 border-r-2">---</td>
                    @endif

                    @if (!empty($invitacion->nombreInvitado6))
                        <td scope="col" class="px-6 py-3">{{$invitacion->nombreInvitado6}}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 ">---</td>
                    @endif
                    
                    @if (!empty($invitacion->especificacionesInvitado6))
                        <td scope="col" class="px-6 py-3 border-r-2">{{ $invitacion->especificacionesInvitado6 }}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 border-r-2">---</td>
                    @endif

                    @if (!empty($invitacion->nombreInvitado7))
                        <td scope="col" class="px-6 py-3">{{$invitacion->nombreInvitado7}}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 ">---</td>
                    @endif
                    
                    @if (!empty($invitacion->especificacionesInvitado7))
                        <td scope="col" class="px-6 py-3 border-r-2">{{ $invitacion->especificacionesInvitado7 }}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 border-r-2">---</td>
                    @endif

                    @if (!empty($invitacion->nombreInvitado8))
                        <td scope="col" class="px-6 py-3">{{$invitacion->nombreInvitado8}}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 ">---</td>
                    @endif
                    
                    @if (!empty($invitacion->especificacionesInvitado8))
                        <td scope="col" class="px-6 py-3 border-r-2">{{ $invitacion->especificacionesInvitado8 }}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 border-r-2">---</td>
                    @endif

                    @if (!empty($invitacion->dato))
                        <td scope="col" class="px-6 py-3 border-r-2">{{ $invitacion->dato }}</td>
                    @else 
                        <td scope="col" class="px-6 py-3 border-r-2">---</td>
                    @endif

                    

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>