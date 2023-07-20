<?php

namespace App\Http\Controllers;

class MedirVelocidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('velocidade.show');
    }
}
