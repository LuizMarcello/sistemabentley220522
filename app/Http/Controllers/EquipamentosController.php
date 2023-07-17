<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $equipamentos = Equipamento::where('tipodeequipamento', 'LIKE', "%$keyword%")
               /*  ->orWhere('user_id', 'LIKE', "%$keyword%") */
                ->orWhere('notafiscal', 'LIKE', "%$keyword%")
                ->orWhere('datanota', 'LIKE', "%$keyword%")
                ->orWhere('banda', 'LIKE', "%$keyword%")
                ->orWhere('quantidade', 'LIKE', "%$keyword%")
                ->orWhere('unidade', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->orWhere('diametro', 'LIKE', "%$keyword%")
                ->orWhere('marca', 'LIKE', "%$keyword%")
                ->orWhere('modelo', 'LIKE', "%$keyword%")
                ->orWhere('voltagem', 'LIKE', "%$keyword%")
                ->orWhere('serial', 'LIKE', "%$keyword%")
                ->orWhere('macaddress', 'LIKE', "%$keyword%")
                ->orWhere('situacao', 'LIKE', "%$keyword%")
                ->orWhere('observacao', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            /* $equipamentos = Equipamento::latest()->paginate($perPage); */
            $equipamentos = Equipamento::latest()->paginate(3);
        }

        return view('equipamentos.index', compact('equipamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('equipamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			/* 	'banda' => 'required', */
			'datanota' => 'required',
			'notafiscal' => 'required',
		/* 	'diametro' => 'required', */
			'marca' => 'required',
			'modelo' => 'required',
			/* 'tipo' => 'required', */
		/* 	'serial' => 'required', */
		/* 	'voltagem' => 'required', */
			/* 'macaddress' => 'required' */
		]);
        $requestData = $request->all();

        Equipamento::create($requestData);

        return redirect('equipamentos')->with('flash_message', 'Equipamento added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $equipamento = Equipamento::findOrFail($id);

        return view('equipamentos.show', compact('equipamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $equipamento = Equipamento::findOrFail($id);

        return view('equipamentos.edit', compact('equipamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
		/* 	'banda' => 'required', */
			'datanota' => 'required',
			'notafiscal' => 'required',
		/* 	'diametro' => 'required', */
			'marca' => 'required',
			'modelo' => 'required',
			/* 'tipo' => 'required', */
		/* 	'serial' => 'required', */
		/* 	'voltagem' => 'required', */
			/* 'macaddress' => 'required' */
		]);
        $requestData = $request->all();

        $equipamento = Equipamento::findOrFail($id);
        $equipamento->update($requestData);

        return redirect('equipamentos')->with('flash_message', 'Equipamento updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Equipamento::destroy($id);

        return redirect('equipamentos')->with('flash_message', 'Equipamento deleted!');
    }
}
