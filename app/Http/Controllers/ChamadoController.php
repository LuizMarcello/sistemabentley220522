<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $modelochamados = Chamado::where('cliente', 'LIKE', "%$keyword%")
                ->orWhere('categoria', 'LIKE', "%$keyword%")
                ->orWhere('responsavel', 'LIKE', "%$keyword%")
                ->orWhere('agendamento', 'LIKE', "%$keyword%")
                ->orWhere('assunto', 'LIKE', "%$keyword%")
                ->orWhere('mensagem', 'LIKE', "%$keyword%")
                ->orWhere('prioridade', 'LIKE', "%$keyword%")
                ->orWhere('horario', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            /* $chamado = Chamado::latest()->paginate($perPage); */
               $chamados = Chamado::latest()->paginate(3);
        }

        return view('chamado.index', compact('chamados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chamado.create');
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
    public function show($id)
    {
        //
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
