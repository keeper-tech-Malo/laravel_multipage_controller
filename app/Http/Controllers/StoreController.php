<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $tabl =[
            (object)['jour'=>'lundi', 'heurJ1'=>'7h00 am to 8h00 pm'],
            (object)['jour'=>'mardi', 'heurJ2'=>'7h00 am to 8h00 pm'],
            (object)['jour'=>'mercredi', 'heurJ3'=>'7h00 am to 8h00 pm'],
            (object)['jour'=>'jeudi', 'heurJ4'=>'7h00 am to 8h00 pm'],
            (object)['jour'=>'vendredi', 'heurJ5'=>'7h00 am to 8h00 pm'],
        ];
        return view('/pages/store', compact('tabl'));
    }
}
