<?php

// Chamei esse controlador na web.php
namespace App\Http\Controllers;


use App\Models\Incidents;

use Illuminate\Http\Request;

class IncidentsController extends Controller
{
    //

    //Meu metodo index
    public function index(){

        //Meu metodo Retornando minha view
            $incidents = Incidents::all();

            return view('incidents.index', compact('incidents'));
    }

}
