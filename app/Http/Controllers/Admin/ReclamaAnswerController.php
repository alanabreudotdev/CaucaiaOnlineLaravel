<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ReclamaAnswer;
use Illuminate\Http\Request;

class ReclamaAnswerController extends Controller
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
            $reclamaanswer = ReclamaAnswer::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('texto_comentario', 'LIKE', "%$keyword%")
                ->orWhere('reclama_id', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('reclamante_id', 'LIKE', "%$keyword%")
                ->orWhere('concluida', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reclamaanswer = ReclamaAnswer::latest()->paginate($perPage);
        }

        return view('admin.reclama-answer.index', compact('reclamaanswer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.reclama-answer.create');
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
			'texto_comentario' => 'required',
			'reclama_id' => 'required',
			'status' => 'required',
			'reclamante_id' => 'required'
		]);
        $requestData = $request->all();
        
        ReclamaAnswer::create($requestData);

        return redirect('admin/reclama-answer')->with('flash_message', 'ReclamaAnswer added!');
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
        $reclamaanswer = ReclamaAnswer::findOrFail($id);

        return view('admin.reclama-answer.show', compact('reclamaanswer'));
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
        $reclamaanswer = ReclamaAnswer::findOrFail($id);

        return view('admin.reclama-answer.edit', compact('reclamaanswer'));
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
			'texto_comentario' => 'required',
			'reclama_id' => 'required',
			'status' => 'required',
			'reclamante_id' => 'required'
		]);
        $requestData = $request->all();
        
        $reclamaanswer = ReclamaAnswer::findOrFail($id);
        $reclamaanswer->update($requestData);

        return redirect('admin/reclama-answer')->with('flash_message', 'ReclamaAnswer updated!');
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
        ReclamaAnswer::destroy($id);

        return redirect('admin/reclama-answer')->with('flash_message', 'ReclamaAnswer deleted!');
    }
}
