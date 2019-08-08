<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ClassificadoItem;
use App\ClassificadoCategory;

use Illuminate\Http\Request;

class ClassificadoItemController extends Controller
{
    public function __construct(ClassificadoCategory $classCat){
        $this->classCat = $classCat;
    }
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
            $classificadoitem = ClassificadoItem::where('category_id', 'LIKE', "%$keyword%")
                ->orWhere('titulo', 'LIKE', "%$keyword%")
                ->orWhere('alias', 'LIKE', "%$keyword%")
                ->orWhere('descricao', 'LIKE', "%$keyword%")
                ->orWhere('cidade_id', 'LIKE', "%$keyword%")
                ->orWhere('bairro_id', 'LIKE', "%$keyword%")
                ->orWhere('preco', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->orWhere('endereco', 'LIKE', "%$keyword%")
                ->orWhere('numero', 'LIKE', "%$keyword%")
                ->orWhere('complemento', 'LIKE', "%$keyword%")
                ->orWhere('cep', 'LIKE', "%$keyword%")
                ->orWhere('telefone', 'LIKE', "%$keyword%")
                ->orWhere('tags', 'LIKE', "%$keyword%")
                ->orWhere('visualizacoes', 'LIKE', "%$keyword%")
                ->orWhere('published', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('lat', 'LIKE', "%$keyword%")
                ->orWhere('lng', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $classificadoitem = ClassificadoItem::latest()->paginate($perPage);
        }

        return view('admin.classificado-item.index', compact('classificadoitem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $Category = new ClassificadoCategory;
        $categories = $Category->getCategories();
        return view('admin.classificado-item.create', compact('categories','Category'));
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
			'category_id' => 'required',
			'titulo' => 'required',
			'alias' => 'required',
			'descricao' => 'required',
			'tipo' => 'required',
			'visualizacoes' => 'required',
			'published' => 'required',
			'user_id' => 'required'
		]);
        $requestData = $request->all();
        
        ClassificadoItem::create($requestData);

        return redirect('admin/classificado-item')->with('flash_message', 'ClassificadoItem added!');
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
        $classificadoitem = ClassificadoItem::findOrFail($id);

        return view('admin.classificado-item.show', compact('classificadoitem'));
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
        $classificadoitem = ClassificadoItem::findOrFail($id);

        return view('admin.classificado-item.edit', compact('classificadoitem'));
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
			'category_id' => 'required',
			'titulo' => 'required',
			'alias' => 'required',
			'descricao' => 'required',
			'tipo' => 'required',
			'visualizacoes' => 'required',
			'published' => 'required',
			'user_id' => 'required'
		]);
        $requestData = $request->all();
        
        $classificadoitem = ClassificadoItem::findOrFail($id);
        $classificadoitem->update($requestData);

        return redirect('admin/classificado-item')->with('flash_message', 'ClassificadoItem updated!');
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
        ClassificadoItem::destroy($id);

        return redirect('admin/classificado-item')->with('flash_message', 'ClassificadoItem deleted!');
    }
}
