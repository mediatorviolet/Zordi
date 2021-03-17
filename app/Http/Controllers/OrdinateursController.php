<?php

namespace App\Http\Controllers;

use App\Models\Ordinateurs;
use Illuminate\Http\Request;

class OrdinateursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordinateurs = Ordinateurs::paginate(10);

        return view('ordinateurs.index', [
            'ordinateurs' => $ordinateurs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ordinateurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $validated = $request->validate([
            'nom' => 'required|unique:ordinateurs'
        ]);

        Ordinateurs::create([
            'nom' => $request->input('nom')
        ]);

        return redirect('/ordinateurs');
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
        $ordinateur = Ordinateurs::find($id);

        return view('ordinateurs.edit')->with('ordinateur', $ordinateur);
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
        $ordinateur = Ordinateurs::where('id', $id)
            ->update([
                'nom' => $request->input('nom'),
                'etat' => $request->input('etat')
            ]);

        return redirect('/ordinateurs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ordinateur = Ordinateurs::where('id', $id)
            ->delete();

        return redirect('/ordinateurs');
    }
}
