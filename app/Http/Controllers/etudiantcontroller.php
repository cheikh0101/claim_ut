<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Models\reclamation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class etudiantcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loginEtudiant');
    }

    public function authEtudiant(Request $request)
    {
        $etudiant = etudiant::whereEmail($request->email)->wherePassword($request->password)->first();
        if ($etudiant == null) {
            return view('loginEtudiant')->with(['message' => 'login incorrecte']);
        } else {
            $etudiant = etudiant::where('email', '=', $request->email)->get();
            $reclamation = reclamation::where('user_id', '=', $request->user_id)->get();
            return view('etudiant', compact('etudiant', 'reclamation'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reclamation = new reclamation;
        $reclamation->matiere = $request->input('matiere');
        $reclamation->semestre = $request->input('semestre');
        $reclamation->evaluation = $request->input('evaluation');
        $reclamation->user_id = $request->input('user_id');
        $reclamation->commentaire = $request->input('commentaires');
        $reclamation->save();

        //$etudiant = DB::select('select * from etudiants as e where e.id = $id ');
        //$etudiant = DB::select('select * from etudiants where id = $id ');
        $message = "Réclamation enregistrée avec succès";
        $etudiant = etudiant::where('email', '=', $request->email)->get();
        $reclamation = reclamation::where('user_id', '=', $request->user_id)->get();
        return view('etudiant', compact('etudiant', 'message', 'reclamation'));
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
