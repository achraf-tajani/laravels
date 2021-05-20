<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commandesController extends Controller
{


    public function chercherCommande()
    {
        $info = $_POST['info'];
        // traitement

        $data = array(
            "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
            "numbers" => array(1, 2, 3, 4, 5, 6),
            "holes"   => array("first", 5 => "second", "third")
        );
        return $data;
    }
}
