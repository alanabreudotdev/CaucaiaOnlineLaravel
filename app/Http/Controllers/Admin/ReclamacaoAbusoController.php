<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ReclamacaoAbuso;
use Illuminate\Http\Request;

class ReclamacaoAbusoController extends Controller
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
            $reclamacaoabuso = ReclamacaoAbuso::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('reclamacao_id', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('analisada', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reclamacaoabuso = ReclamacaoAbuso::latest()->paginate($perPage);
        }

        return view('admin.reclamacao-abuso.index', compact('reclamacaoabuso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.reclamacao-abuso.create');
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
			'user_id' => 'required',
			'reclamacao_id' => 'required',
			'status' => 'required',
			'analisada' => 'required'
		]);
        $requestData = $request->all();
        
        ReclamacaoAbuso::create($requestData);

        return redirect('admin/reclamacao-abuso')->with('flash_message', 'ReclamacaoAbuso added!');
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
        $reclamacaoabuso = ReclamacaoAbuso::findOrFail($id);

        return view('admin.reclamacao-abuso.show', compact('reclamacaoabuso'));
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
        $reclamacaoabuso = ReclamacaoAbuso::findOrFail($id);

        return view('admin.reclamacao-abuso.edit', compact('reclamacaoabuso'));
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
			'user_id' => 'required',
			'reclamacao_id' => 'required',
			'status' => 'required',
			'analisada' => 'required'
		]);
        $requestData = $request->all();
        
        $reclamacaoabuso = ReclamacaoAbuso::findOrFail($id);
        $reclamacaoabuso->update($requestData);

        return redirect('admin/reclamacao-abuso')->with('flash_message', 'ReclamacaoAbuso updated!');
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
        ReclamacaoAbuso::destroy($id);

        return redirect('admin/reclamacao-abuso')->with('flash_message', 'ReclamacaoAbuso deleted!');
    }
}
