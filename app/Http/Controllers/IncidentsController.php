<?php

// Chamei esse controlador na web.php
namespace App\Http\Controllers;


use App\Models\Incidents;

use Illuminate\Http\Request;

class IncidentsController extends Controller
{

    //Função Para o Index
   public function index()
    {
        $incidents = Incidents::all();

        return view('incidents.index', ['incidents' => $incidents]);
    }

    //Função para ciar
    public function create()
    {
        return view('incidents.create');
    }

//Função para armazenar
    public function store()
    {
        request()->validate([
            'title' => 'required',
            'describe' => 'required',
            'criticality' => 'required',
            'type' => 'required',
            'status' => 'required',
            
            
        ]);

        //Função para Criar
        Incidents::create([
            'title' => request('title'),
            'describe' => request('describe'),
            'criticality' => request('criticality'),
            'type' => request('type'),
            'status' => request('status'),
        ]);

        //Retorno da minha rota
        return redirect('/incidents');
    }

    //Função para Editar
    public function edit(Incidents $incidents)
    {
        return view('incidents.edit', ['incidents' => $incidents]);
    }

    //Função para atualizar 
    public function update(Incidents $incidents)
    {
        //dd(request()->all()); Debug
        request()->validate([
            'title' => 'required',
            'describe' => 'required',
            'criticality' => 'required',
            'type' => 'required',
            'status' => 'required',
            
        ]);

        $post->update([
            'title' => request('title'),
            'describe' => request('describe'),
            'criticality' => request('criticality'),
            'type' => request('type'),
            'status' => request('status'),
        ]);

        return redirect('/incidents');
    }

    public function destroy(Incidents $incidents)
    {
        $incidents->delete();

        return redirect('/incidents');
    }


}   
