<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;

class FotoController extends Controller
{
    
    public function verSubirFotos() {

        return view('fotos.subirFotos');
    }

    public function subirFotos(Request $request)
    {

        $fotos = $request->file('foto');

        foreach ($fotos as $foto) {
            
            $photo = new Foto();
            $photo->nombre = 'foto';
            $photo->save();

            $id = $photo->id;

            $foto->storeAs(
                'public/fotos',
                'foto_' . $id . '.jpg'
            );
        }

        return redirect()->route('verSubirFotos');
    }

    public function verFotos() {

        $fotos = Foto::all();

        return view('fotos.verFotos', ['fotos' => $fotos]);
    }
}
