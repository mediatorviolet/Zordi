<?php

namespace App\Http\Controllers;

use App\Models\Horaire;
use App\Models\Ordinateurs;
use App\Models\Slots;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class SlotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slots = Slots::paginate(10);

        return view('creneaux.index', [
            'slots' => $slots
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordinateurs = Ordinateurs::where('etat', '=', 1)->get();
        $utilisateurs = Utilisateurs::where('etat', '=', 1)->get();
        $horaires = Horaire::all();

        return view('creneaux.create', [
            'ordinateurs' => $ordinateurs,
            'utilisateurs' => $utilisateurs,
            'horaires' => $horaires
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ordinateur' => 'required',
            'utilisateur' => 'required',
            'date' => 'required|date_format:Y-m-d|after_or_equal:today',
            'horaire' => 'required'
        ]);

        dd($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
