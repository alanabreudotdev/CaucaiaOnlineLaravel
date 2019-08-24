<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresasController extends Controller
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
            $empresas = Empresa::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('tipo_conta_premium_id', 'LIKE', "%$keyword%")
                ->orWhere('whatsapp', 'LIKE', "%$keyword%")
                ->orWhere('telefone', 'LIKE', "%$keyword%")
                ->orWhere('latitude', 'LIKE', "%$keyword%")
                ->orWhere('longitude', 'LIKE', "%$keyword%")
                ->orWhere('total_reviews', 'LIKE', "%$keyword%")
                ->orWhere('website_url', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->orWhere('instagram', 'LIKE', "%$keyword%")
                ->orWhere('facebook', 'LIKE', "%$keyword%")
                ->orWhere('twitter', 'LIKE', "%$keyword%")
                ->orWhere('youtube', 'LIKE', "%$keyword%")
                ->orWhere('foto_01', 'LIKE', "%$keyword%")
                ->orWhere('foto_02', 'LIKE', "%$keyword%")
                ->orWhere('foto_03', 'LIKE', "%$keyword%")
                ->orWhere('foto_04', 'LIKE', "%$keyword%")
                ->orWhere('foto_05', 'LIKE', "%$keyword%")
                ->orWhere('foto_06', 'LIKE', "%$keyword%")
                ->orWhere('foto_07', 'LIKE', "%$keyword%")
                ->orWhere('foto_08', 'LIKE', "%$keyword%")
                ->orWhere('foto_09', 'LIKE', "%$keyword%")
                ->orWhere('foto_10', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('owner_user_id', 'LIKE', "%$keyword%")
                ->orWhere('featured', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $empresas = Empresa::latest()->paginate($perPage);
        }

        return view('admin.empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.empresas.create');
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
			'nome' => 'required'
		]);
        $requestData = $request->all();
        
        Empresa::create($requestData);

        return redirect('admin/empresas')->with('flash_message', 'Empresa added!');
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
        $empresa = Empresa::findOrFail($id);

        return view('admin.empresas.show', compact('empresa'));
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
        $empresa = Empresa::findOrFail($id);

        return view('admin.empresas.edit', compact('empresa'));
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
			'nome' => 'required'
		]);
        $requestData = $request->all();
        
        $empresa = Empresa::findOrFail($id);
        $empresa->update($requestData);

        return redirect('admin/empresas')->with('flash_message', 'Empresa updated!');
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
        Empresa::destroy($id);

        return redirect('admin/empresas')->with('flash_message', 'Empresa deleted!');
    }
}
