<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\EmpresasCategory;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;


class EmpresasCategoryController extends Controller
{
  use UploadTrait;
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
            $empresascategory = EmpresasCategory::where('name', 'LIKE', "%$keyword%")
                ->orWhere('icon_url', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $empresascategory = EmpresasCategory::latest()->paginate($perPage);
        }

        return view('admin.empresas-category.index', compact('empresascategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.empresas-category.create');
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
			'icon_url' => 'required',
      //'logo'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
		]);
        $requestData = $request->all();

        // Check if a profile image has been uploaded
        if ($request->has('icon_url')) {
            // Get image file
            $image = $request->file('icon_url');
            // Make a image name based on user name and current timestamp
            $name = str_slug($requestData['name']).'_'.time();
            // Define folder path
            $folder = '/uploads/images/empresas/categorias/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $requestData['icon_url'] = $filePath;
        }

        EmpresasCategory::create($requestData);

        return redirect('admin/empresas-category')->with('flash_message', 'Categoria cadastrada com sucesso!');
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
        $empresascategory = EmpresasCategory::findOrFail($id);

        return view('admin.empresas-category.show', compact('empresascategory'));
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
        $empresascategory = EmpresasCategory::findOrFail($id);

        return view('admin.empresas-category.edit', compact('empresascategory'));
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
			'icon_url' => 'required'
		]);
        $requestData = $request->all();

        $empresascategory = EmpresasCategory::findOrFail($id);
        $empresascategory->update($requestData);

        return redirect('admin/empresas-category')->with('flash_message', 'EmpresasCategory updated!');
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
        EmpresasCategory::destroy($id);

        return redirect('admin/empresas-category')->with('flash_message', 'EmpresasCategory deleted!');
    }
}
