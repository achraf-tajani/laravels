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
        $arg = "";
        if (isset($_GET['arg-info']) && !empty($_GET['arg-info'])) {
            $commande =  Commandes::where('CDE_MGTO',  $_GET['arg-info'])
                ->orWhere('NOM', 'like', '%' . $_GET['arg-info'] . '%')
                ->orWhere('PRENOM', 'like', '%' . $_GET['arg-info'] . '%')
                ->get();
        } else if (isset($_GET['arg-ewms']) && !empty($_GET['arg-ewms'])) {

            $arg = $_GET['arg-ewms'] === "empty" ? ' ' : $_GET['arg-ewms'];
            $commande =  Commandes::where('EWMS_STATUS',  $arg)
                ->get();
        } else if (isset($_GET['arg-ramasse']) && !empty($_GET['arg-ramasse'])) {
            $arg = $_GET['arg-ramasse'] === "empty" ? ' ' : $_GET['arg-ramasse'];
            $commande =  Commandes::where('RAMASSE_LIGNE_STATUT',   $arg)
                ->get();
        } else {
            $commande =  Commandes::all();
        }
        return view('pages/commandes', ['commandes' => $commande]);
    }
}
