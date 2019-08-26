<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EmpresaPackage;
use Illuminate\Http\Request;

class EmpresaPackageController extends Controller
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
            $empresapackage = EmpresaPackage::where('name', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('free', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $empresapackage = EmpresaPackage::latest()->paginate($perPage);
        }

        return view('admin.empresa-package.index', compact('empresapackage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.empresa-package.create');
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
			'name' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();
        
        EmpresaPackage::create($requestData);

        return redirect('admin/empresa-package')->with('flash_message', 'EmpresaPackage added!');
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
        $empresapackage = EmpresaPackage::findOrFail($id);

        return view('admin.empresa-package.show', compact('empresapackage'));
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
        $empresapackage = EmpresaPackage::findOrFail($id);

        return view('admin.empresa-package.edit', compact('empresapackage'));
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
			'name' => 'required',
			'status' => 'required'
		]);
        $requestData = $request->all();
        
        $empresapackage = EmpresaPackage::findOrFail($id);
        $empresapackage->update($requestData);

        return redirect('admin/empresa-package')->with('flash_message', 'EmpresaPackage updated!');
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
        EmpresaPackage::destroy($id);

        return redirect('admin/empresa-package')->with('flash_message', 'EmpresaPackage deleted!');
    }
}
