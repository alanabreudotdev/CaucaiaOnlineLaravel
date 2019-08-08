<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ReclamaApoio;
use Illuminate\Http\Request;

class ReclamaApoioController extends Controller
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
            $reclamaapoio = ReclamaApoio::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('reclamacao_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reclamaapoio = ReclamaApoio::latest()->paginate($perPage);
        }

        return view('admin.reclama-apoio.index', compact('reclamaapoio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.reclama-apoio.create');
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
			'reclamacao_id' => 'required'
		]);
        $requestData = $request->all();
        
        ReclamaApoio::create($requestData);

        return redirect('admin/reclama-apoio')->with('flash_message', 'ReclamaApoio added!');
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
        $reclamaapoio = ReclamaApoio::findOrFail($id);

        return view('admin.reclama-apoio.show', compact('reclamaapoio'));
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
        $reclamaapoio = ReclamaApoio::findOrFail($id);

        return view('admin.reclama-apoio.edit', compact('reclamaapoio'));
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
			'reclamacao_id' => 'required'
		]);
        $requestData = $request->all();
        
        $reclamaapoio = ReclamaApoio::findOrFail($id);
        $reclamaapoio->update($requestData);

        return redirect('admin/reclama-apoio')->with('flash_message', 'ReclamaApoio updated!');
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
        ReclamaApoio::destroy($id);

        return redirect('admin/reclama-apoio')->with('flash_message', 'ReclamaApoio deleted!');
    }
}
