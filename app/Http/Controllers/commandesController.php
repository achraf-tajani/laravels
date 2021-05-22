<?php

namespace App\Http\Controllers;

use App\Models\Commandes;
use Illuminate\Support\Facades\Http;


class commandesController extends Controller
{

    public function commandes()
    {
        $response = Http::get(env("HOLLIDAY_API") . "metropole/2021.json")->body();

        // ->whereBetween('DATE_CDE', [1, 100])
        // ->get();
        $commande = [];
        if (isset($_GET['arg'])) {
            $commande =  Commandes::where('CDE_MGTO',  $_GET['arg'])
                ->orWhere('NOM', 'like', '%' . $_GET['arg'] . '%')
                ->orWhere('PRENOM', 'like', '%' . $_GET['arg'] . '%')
                ->get();
        } else {
            $commande =  Commandes::all();
        }
        return view('pages/commandes', ['commandes' => $commande]);
    }
}
