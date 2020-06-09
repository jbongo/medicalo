<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = User::whereIn('role',['responsable','infirmiere','admin'])->orderBy('nom')->get();
        $admins = User::whereIn('role',['admin'])->orderBy('nom')->get();
        return view ('utilisateurs.index',compact('utilisateurs','admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("utilisateurs.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($utilisateur_id)
    {
        $id = Crypt::decrypt($utilisateur_id);
        $utilisateur = User::where('id', $id)->firstOrFail();
        

        // statistiques

 
        return view('utilisateurs.show', compact(['utilisateur']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($utilisateur_id)
    {
        $id = Crypt::decrypt($utilisateur_id);
        $utilisateur = User::where('id', $id)->firstOrFail();
        return view('utilisateurs.edit', compact(['utilisateur']));
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
