<?php

namespace App\Http\Controllers;

use App\Models\Visiteur;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index(){
        $lesvisiteurs = Visiteur::with('Voitures')->get();

        return view('gsb.voitures.index', compact('lesvisiteurs'));
    }
}
