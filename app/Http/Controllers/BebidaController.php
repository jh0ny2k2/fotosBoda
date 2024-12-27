<?php

namespace App\Http\Controllers;

use App\Models\bebida;
use Illuminate\Http\Request;

class BebidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function bebida(Request $request)
    {
        $bebida = new bebida();
        $bebida->bebida = $request->bebida;
        $bebida->save();

        return redirect()->route('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function admin()
    {
        $bebidas = bebida::all();
        return view('admin.bebidas', ['bebidas' => $bebidas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(bebida $bebida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bebida $bebida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bebida $bebida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bebida $bebida)
    {
        //
    }
}
