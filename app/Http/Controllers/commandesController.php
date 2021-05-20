<?php

namespace App\Http\Controllers;

use App\Models\Commandes;


class commandesController extends Controller
{

    public function commandes()
    {
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
