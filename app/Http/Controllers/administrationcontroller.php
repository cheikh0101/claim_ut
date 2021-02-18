<?php

namespace App\Http\Controllers;

use App\Models\reclamation;
use Illuminate\Http\Request;
use App\Models\administration;
use Illuminate\Support\Facades\DB;

class administrationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loginAdministration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authAdministration(Request $request)
    {
        $administration = administration::whereEmail($request->email)->wherePassword($request->password)->first();
        if ($administration == null) {
            return view('loginAdministration')->with(['message' => 'Login et/ou mot de passe incorrect(s)']);
        } else {
            $reclamations1 = reclamation::where('semestre', '=', 'SEMESTRE 1')->get();
            $reclamations2 = reclamation::where('semestre', '=', 'SEMESTRE 2')->get();
            $etudiants = DB::select('select * from etudiants as e,reclamations as r where e.id = r.user_id');
            //$reclamations1 = DB::select('select * from etudiants as e,reclamations as r where e.id = r.user_id AND r.semestre=$semestre1 ');
            return view('administration', compact('reclamations1', 'reclamations2', 'administration', 'etudiants'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
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
