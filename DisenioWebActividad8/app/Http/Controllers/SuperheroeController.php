<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use Illuminate\Http\Request;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['superheroes']=Superheroe::paginate(5);
        return view('Superheroe.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Superheroe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$datosHeroes = request()->all();
        $datosHeroes = request()->except('_token');
        Superheroe::insert($datosHeroes);
        return response() -> json($datosHeroes);
    }

    /**
     * Display the specified resource.
     */
    public function show(Superheroe $superheroe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Superheroe $superheroe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Superheroe $superheroe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Superheroe $superheroe)
    {
        //
    }
}
