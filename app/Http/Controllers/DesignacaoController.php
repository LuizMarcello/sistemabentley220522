<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Designacao;
use Illuminate\Http\Request;

class DesignacoesController extends Controller
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
            $designacoes = Designacao::where('banda', 'LIKE', "%$keyword%")
                ->orWhere('modem', 'LIKE', "%$keyword%")
                ->orWhere('antena', 'LIKE', "%$keyword%")
                ->orWhere('lnb', 'LIKE', "%$keyword%")
                ->orWhere('buc-transmitter', 'LIKE', "%$keyword%")
                ->orWhere('ilnb', 'LIKE', "%$keyword%")
                ->orWhere('tria', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $designacoes = Designacao::latest()->paginate($perPage);
        }

        return view('designacoes.index', compact('designacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('designacoes.create');
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

        $requestData = $request->all();

        Designacao::create($requestData);

        return redirect('designacoes')->with('flash_message', 'Designaco added!');
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
        $designaco = Designacao::findOrFail($id);

        return view('designacoes.show', compact('designaco'));
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
        $designaco = Designacao::findOrFail($id);

        return view('designacoes.edit', compact('designaco'));
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

        $requestData = $request->all();

        $designaco = Designacao::findOrFail($id);
        $designaco->update($requestData);

        return redirect('designacoes')->with('flash_message', 'Designaco updated!');
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
        Designacao::destroy($id);

        return redirect('designacoes')->with('flash_message', 'Designaco deleted!');
    }
}
