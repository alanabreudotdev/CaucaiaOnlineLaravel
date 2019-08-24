<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ClassificadoCategory;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;

class ClassificadoCategoryController extends Controller
{
    use UploadTrait;

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
            $classificadocategory = ClassificadoCategory::where('name', 'LIKE', "%$keyword%")
                ->orWhere('parent_id', 'LIKE', "%$keyword%")
                ->orWhere('published', 'LIKE', "%$keyword%")
                ->orWhere('logo', 'LIKE', "%$keyword%")
                ->orWhere('alias', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $classificadocategory = ClassificadoCategory::latest()->with('children')->paginate($perPage);

        }

        return view('admin.classificado-category.index', compact('classificadocategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $categorias = $this->classCat->getCategoriesToSelect();
        return view('admin.classificado-category.create', compact('categorias'));
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
			      'parent_id' => 'required',
            'published' => 'required',
            'logo'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
		]);
        $requestData = $request->all();

        // Check if a profile image has been uploaded
        if ($request->has('logo')) {
            // Get image file
            $image = $request->file('logo');
            // Make a image name based on user name and current timestamp
            $name = str_slug($requestData['name']).'_'.time();
            // Define folder path
            $folder = '/uploads/images/classificados/categorias/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $requestData['logo'] = $filePath;
        }

        ClassificadoCategory::create($requestData);

        return redirect('admin/classificado-category')->with('flash_message', 'ClassificadoCategory added!');
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
        $classificadocategory = ClassificadoCategory::findOrFail($id);

        return view('admin.classificado-category.show', compact('classificadocategory'));
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
        $classificadocategory = ClassificadoCategory::findOrFail($id);
        $categorias = $this->classCat->getCategoriesToSelect();

        return view('admin.classificado-category.edit', compact('classificadocategory','categorias'));
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
			'parent_id' => 'required',
            'published' => 'required',
            'logo'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
		]);
        $requestData = $request->all();

        // Check if a profile image has been uploaded
        if ($request->has('logo')) {
            // Get image file
            $image = $request->file('logo');
            // Make a image name based on user name and current timestamp
            $name = str_slug($requestData['name']).'_'.time();
            // Define folder path
            $folder = '/uploads/images/classificados/categorias/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $requestData['logo'] = $filePath;
        }

        $classificadocategory = ClassificadoCategory::findOrFail($id);
        $classificadocategory->update($requestData);

        return redirect('admin/classificado-category')->with('flash_message', 'ClassificadoCategory updated!');
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
        ClassificadoCategory::destroy($id);

        return redirect('admin/classificado-category')->with('flash_message', 'ClassificadoCategory deleted!');
    }
}
