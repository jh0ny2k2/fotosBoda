<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use App\Models\Invitado;
use App\Models\Numero;
use Illuminate\Http\Request;

class InvitadoController extends Controller
{
    public function confirmarAsistencia(Request $request)
    {

        $numero = Numero::find(1);  
        $numero->numero =  $numero->numero + 1 + $request->invitados; 
        $numero->save();  

        $invitado = new Invitado();
        $invitado->asistencia = $request->asistencia;
        $invitado->nombre = $request->nombre;
        $invitado->telefono = $request->telefono;
        if ($request->has('alimenticio')){
            $invitado->especificaciones = json_encode($request->alimenticio);
        } else {
            $invitado->especificaciones = null;
        }

        $invitado->numeroInvitados = $request->invitados;

        // ACOMPAÑANTE 1
        if ($request->has('nombreInvitado1')){
            $invitado->nombreInvitado1 = $request->nombreInvitado1;
        } else {
            $invitado->nombreInvitado1 = null;
        }

        if ($request->has('especificacionesInvitado1')){
            $invitado->especificacionesInvitado1 = $request->especificacionesInvitado1;
        } else {
            $invitado->especificacionesInvitado1 = null;
        }

        // ACOMPAÑANTE 2
        if ($request->has('nombreInvitado2')){
            $invitado->nombreInvitado2 = $request->nombreInvitado2;
        } else {
            $invitado->nombreInvitado2 = null;
        }

        if ($request->has('especificacionesInvitado2')){
            $invitado->especificacionesInvitado2 = $request->especificacionesInvitado2;
        } else {
            $invitado->especificacionesInvitado2 = null;
        }


        // ACOMPAÑANTE 3
        if ($request->has('nombreInvitado3')){
            $invitado->nombreInvitado3 = $request->nombreInvitado3;
        } else {
            $invitado->nombreInvitado3 = null;
        }

        if ($request->has('especificacionesInvitado3')){
            $invitado->especificacionesInvitado3 = $request->especificacionesInvitado3;
        } else {
            $invitado->especificacionesInvitado3 = null;
        }

        // ACOMPAÑANTE 4
        if ($request->has('nombreInvitado4')){
            $invitado->nombreInvitado4 = $request->nombreInvitado4;
        } else {
            $invitado->nombreInvitado4 = null;
        }

        if ($request->has('especificacionesInvitado4')){
            $invitado->especificacionesInvitado4 = $request->especificacionesInvitado4;
        } else {
            $invitado->especificacionesInvitado4 = null;
        }

        // ACOMPAÑANTE 5
        if ($request->has('nombreInvitado5')){
            $invitado->nombreInvitado5 = $request->nombreInvitado5;
        } else {
            $invitado->nombreInvitado5 = null;
        }

        if ($request->has('especificacionesInvitado5')){
            $invitado->especificacionesInvitado5 = $request->especificacionesInvitado5;
        } else {
            $invitado->especificacionesInvitado5 = null;
        }

        // ACOMPAÑANTE 6
        if ($request->has('nombreInvitado6')){
            $invitado->nombreInvitado6 = $request->nombreInvitado6;
        } else {
            $invitado->nombreInvitado6 = null;
        }

        if ($request->has('especificacionesInvitado6')){
            $invitado->especificacionesInvitado6 = $request->especificacionesInvitado6;
        } else {
            $invitado->especificacionesInvitado6 = null;
        }

        // ACOMPAÑANTE 7
        if ($request->has('nombreInvitado7')){
            $invitado->nombreInvitado7 = $request->nombreInvitado7;
        } else {
            $invitado->nombreInvitado7 = null;
        }

        if ($request->has('especificacionesInvitado7')){
            $invitado->especificacionesInvitado7 = $request->especificacionesInvitado7;
        } else {
            $invitado->especificacionesInvitado7 = null;
        }

        // ACOMPAÑANTE 8
        if ($request->has('nombreInvitado8')){
            $invitado->nombreInvitado8 = $request->nombreInvitado8;
        } else {
            $invitado->nombreInvitado8 = null;
        }

        if ($request->has('especificacionesInvitado8')){
            $invitado->especificacionesInvitado8 = $request->especificacionesInvitado8;
        } else {
            $invitado->especificacionesInvitado8 = null;
        }

        if ($request->has('dato')){
            $invitado->dato = $request->dato;
        } else {
            $invitado->dato = null;
        }

        $invitado->save();

        return redirect()->route('welcome');

    }


    public function verAdmin(){
         
        return view('admin.admin');
    }

    public function verInvitaciones() {
 
        $invitaciones = Invitado::all();
        $numero = Numero::where('id', '1')->first();
     
        return view('admin.invitados', ['invitados' => $invitaciones, 'numero' => $numero]);
    }
    

    public function verCanciones() {

        $cancion = Cancion::all();

        return view('admin.canciones', ['canciones' => $cancion]);
    }
    
}
