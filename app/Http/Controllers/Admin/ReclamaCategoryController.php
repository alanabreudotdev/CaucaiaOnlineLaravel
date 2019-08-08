<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ReclamaCategory;
use Illuminate\Http\Request;
use Flash;
use App\Traits\UploadTrait;


class ReclamaCategoryController extends Controller
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
            $reclamacategory = ReclamaCategory::where('name', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reclamacategory = ReclamaCategory::latest()->paginate($perPage);
        }

        return view('admin.reclama-category.index', compact('reclamacategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.reclama-category.create');
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
            'icon' => 'required',
            'icon_image_url'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
		]);
        $requestData = $request->all();

        // Check if a profile image has been uploaded
        if ($request->has('icon_image_url')) {
            // Get image file
            $image = $request->file('icon_image_url');
            // Make a image name based on user name and current timestamp
            $name = str_slug($requestData['name'].'_markermap');
            // Define folder path
            $folder = '/uploads/reclamacao/icons/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $requestData['icon_image_url'] = $filePath;
        }

        // Check if a profile image has been uploaded
        if ($request->has('icon')) {
            // Get image file
            $image = $request->file('icon');
            // Make a image name based on user name and current timestamp
            $name = str_slug($requestData['name'].'iconcat');
            // Define folder path
            $folder = '/uploads/reclamacao/icons/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $requestData['icon'] = $filePath;
        }
		
        
        ReclamaCategory::create($requestData);
        
        return redirect('admin/reclama-category')->with('flash_message', 'Categoria Adicionada!');
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
        $reclamacategory = ReclamaCategory::findOrFail($id);

        return view('admin.reclama-category.show', compact('reclamacategory'));
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
        $reclamacategory = ReclamaCategory::findOrFail($id);
        
        return view('admin.reclama-category.edit', compact('reclamacategory'));
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
            'icon_image_url'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
		]);
        $requestData = $request->all();

        // Check if a profile image has been uploaded
        if ($request->has('icon_image_url')) {
            // Get image file
            $image = $request->file('icon_image_url');
            // Make a image name based on user name and current timestamp
            $name = str_slug($requestData['name']).'_'.time();
            // Define folder path
            $folder = '/uploads/reclamacao/icons/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $requestData['icon_image_url'] = $filePath;
        }
        
        $reclamacategory = ReclamaCategory::findOrFail($id);
        $reclamacategory->update($requestData);

        return redirect('admin/reclama-category')->with('flash_message', 'ReclamaCategory updated!');
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
        ReclamaCategory::destroy($id);

        return redirect('admin/reclama-category')->with('flash_message', 'ReclamaCategory deleted!');
    }
}
