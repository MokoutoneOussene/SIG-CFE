<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Famille::all();
        return view('pages.famille.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Famille::create([
            'libelle' => $request->libelle,
            'taux' => $request->taux,
        ]);

        smilify('success','Famille ajoutée avec succès !');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function show(Famille $famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function edit(Famille $famille)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Famille $famille)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famille $famille)
    {
        //
    }
}
