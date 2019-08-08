<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Reclamacao;
use App\ReclamaCategory;
use App\ReclamaSubCategory;
use Illuminate\Http\Request;

class ReclamacaoController extends Controller
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
            $reclamacao = Reclamacao::where('reclama_category_id', 'LIKE', "%$keyword%")
                ->orWhere('reclama_sub_category_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('titulo', 'LIKE', "%$keyword%")
                ->orWhere('texto_reclamacao', 'LIKE', "%$keyword%")
                ->orWhere('foto_url_01', 'LIKE', "%$keyword%")
                ->orWhere('foto_url_02', 'LIKE', "%$keyword%")
                ->orWhere('foto_url_03', 'LIKE', "%$keyword%")
                ->orWhere('endereco', 'LIKE', "%$keyword%")
                ->orWhere('celular', 'LIKE', "%$keyword%")
                ->orWhere('telefone', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('solucionada', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reclamacao = Reclamacao::latest()->with('categories','subcategories')->paginate($perPage);
            
        }

        return view('admin.reclamacao.index', compact('reclamacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = ReclamaCategory::pluck('name','id');
        $sub_categories = ReclamaSubCategory::pluck('name','id');

        return view('admin.reclamacao.create', compact('categories','sub_categories'));
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
			'reclama_category_id' => 'required',
			'reclama_sub_category_id' => 'required',
			'user_id' => 'required',
			'titulo' => 'required',
			'texto_reclamacao' => 'required',
			'endereco' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();
        
        Reclamacao::create($requestData);

        return redirect('admin/reclamacao')->with('flash_message', 'Reclamacao added!');
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
        $reclamacao = Reclamacao::findOrFail($id);

        return view('admin.reclamacao.show', compact('reclamacao'));
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
        $reclamacao = Reclamacao::findOrFail($id);

        $categories = ReclamaCategory::pluck('name','id');
        $sub_categories = ReclamaSubCategory::pluck('name','id');

        return view('admin.reclamacao.edit', compact('reclamacao','categories','sub_categories'));
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
			'reclama_category_id' => 'required',
			'reclama_sub_category_id' => 'required',
			'user_id' => 'required',
			'titulo' => 'required',
			'texto_reclamacao' => 'required',
			'endereco' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();
        
        $reclamacao = Reclamacao::findOrFail($id);
        $reclamacao->update($requestData);

        return redirect('admin/reclamacao')->with('flash_message', 'Reclamacao updated!');
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
        Reclamacao::destroy($id);

        return redirect('admin/reclamacao')->with('flash_message', 'Reclamacao deleted!');
    }

    public function reclamacaoCategorias($id){
        return $sub_categories = ReclamaSubCategory::where('reclama_category_id',$id)->pluck('name','id');

        
    }
}
