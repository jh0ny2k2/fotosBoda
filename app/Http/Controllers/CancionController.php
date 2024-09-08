<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    public function cancion(Request $request)
    {
        
        $cancion = new Cancion();
        $cancion->nombre = $request->nombre;
        if ($request->has('url')){
            $cancion->url = $request->url;
        }
        $cancion->save();

        return redirect()->route('welcome');
    }

}
