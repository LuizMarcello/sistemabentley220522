<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\HistoricoRequest;
use App\Models\Historico;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        /* var_dump(session('todotasks')); */

        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $historicos = Historico::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('cliente', 'LIKE', "%$keyword%")
                ->orWhere('descricao', 'LIKE', "%$keyword%")
                ->orWhere('detalhes', 'LIKE', "%$keyword%")
                ->orWhere('equipamento', 'LIKE', "%$keyword%")
                ->orWhere('pendencias', 'LIKE', "%$keyword%")
                ->orWhere('datainicio', 'LIKE', "%$keyword%")
                ->orWhere('dataencerramento', 'LIKE', "%$keyword%")
                ->orWhere('situacao', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            /* $historicos = Historico::latest()->paginate($perPage); */
               $historicos = Historico::latest()->paginate(3);
        }

        return view('historico.index', compact('historicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $historico = Historico::findOrFail($id);
        return view('historico.show', compact('historico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historico = Historico::findOrFail($id);

        return view('historico.edit', compact('historico'));
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
