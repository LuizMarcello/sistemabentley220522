<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Ferramenta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
//use App\Http\Requests\HistoricoRequest;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class FerramentasController extends Controller
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
            $ferramentas = Ferramenta::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('controle', 'LIKE', "%$keyword%")
                ->orWhere('categoria', 'LIKE', "%$keyword%")
                ->orWhere('medida', 'LIKE', "%$keyword%")
                ->orWhere('descricao', 'LIKE', "%$keyword%")
                ->orWhere('situacao', 'LIKE', "%$keyword%")
                ->orWhere('desde', 'LIKE', "%$keyword%")
                ->orWhere('tipoferramenta', 'LIKE', "%$keyword%")
                ->orWhere('tipoinstrumento', 'LIKE', "%$keyword%")
                ->orWhere('unidademedida', 'LIKE', "%$keyword%")
                ->orWhere('observacao', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            /* $ferramentas = Ferramenta::latest()->paginate($perPage); */
               $ferramentas = Ferramenta::latest()->paginate(3);
        }

        return view('ferramentas.index', compact('ferramentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ferramentas.create');
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
			'descricao' => 'required'
			/* 'controle' => 'required', */
			/* 'categoria' => 'required', */
			/* 'situacao' => 'required' */
		]);
        $requestData = $request->all();

        Ferramenta::create($requestData);

        return redirect('ferramentas')->with('flash_message', 'Ferramenta added!');
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
        $ferramenta = Ferramenta::findOrFail($id);

        return view('ferramentas.show', compact('ferramenta'));
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
        $ferramenta = Ferramenta::findOrFail($id);

        return view('ferramentas.edit', compact('ferramenta'));
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
			'descricao' => 'required'
			/* 'controle' => 'required', */
			/* 'categoria' => 'required', */
			/* 'situacao' => 'required' */
		]);
        $requestData = $request->all();

        $ferramenta = Ferramenta::findOrFail($id);
        $ferramenta->update($requestData);

        return redirect('ferramentas')->with('flash_message', 'Ferramenta updated!');
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
        Ferramenta::destroy($id);

        return redirect('ferramentas')->with('flash_message', 'Ferramenta deleted!');
    }
}
