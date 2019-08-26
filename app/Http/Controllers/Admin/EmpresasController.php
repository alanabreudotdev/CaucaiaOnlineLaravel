<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Empresa;
use App\EmpresasCategory;
use App\User;
use App\Traits\UploadTrait;
use Validator;

use Illuminate\Http\Request;

class EmpresasController extends Controller
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
        $categorias = EmpresasCategory::pluck('name','id');
        $users = User::pluck('name','id');

        return view('admin.empresas.create', compact('categorias', 'users'));
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
      //dd(floatval($request->latitude));
      //dd(sizeof($request->files));

        $this->validate($request, [
			       'nome' => 'required',
			       'latitude' => 'required',
			       'longitude' => 'required',
			       'description' => 'required',
			       'category_id' => 'required',

		]);

        $requestData = $request->all();

        $save = Empresa::create($requestData);

        //TRATAR IMAGEM PRINCIPAL DA EMPRESA
        // Check if a profile image has been uploaded
        if ($request->has('imagem_principal')) {
            // Get image file
            $image = $request->file('imagem_principal')[0];
            // Make a image name based on user name and current timestamp
            $name = str_slug($save->id.'_'.time().'_'. str_random(50));
            // Define folder path
            $folder = '/uploads/images/empresas/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);

           //compress image
            $this->compressedImage(storage_path().'/app/public'.$filePath, storage_path().'/app/public'.$filePath,30);

            $save->imagem_principal = $filePath;
            $save->save();
        }

        //TRATAR FOTOS GALERIA MAX 9 FOTOS
        // get the files
        $files = $request->files;
        // counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        $fotoNumber = 1;

        foreach ($files as $images) {
          foreach ($images as $file) {

            $rules = array('file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $validator = Validator::make(array('file'=> $file), $rules);

            if($validator->passes()){
              $fotoColumn = 'foto_0'.$fotoNumber;
              $destinationPath = storage_path().'/app/public/uploads/images/empresas/'; // upload folder in public directory
              $filename = str_slug($save->id.'_'.time().'_'. str_random(50)). '.' . $file->getClientOriginalExtension();
              $upload_success = $file->move($destinationPath, $filename);

              $uploadcount ++;
              $folder = '/uploads/images/empresas/';
              // Make a file path where image will be stored [ folder path + file name + file extension]
              $filePath = $folder . $filename;
              // save into database
              $extension = $file->getClientOriginalExtension();
              $this->compressedImage(storage_path().'/app/public'.$filePath, storage_path().'/app/public'.$filePath,30);

              $save->$fotoColumn = $filePath;
              $save->save();
              $fotoNumber++;
          }
        }
          }


        return redirect('admin/empresas/create')->with('flash_message', 'Empresa cadastrada com sucesso!');
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
        $categorias = EmpresasCategory::pluck('name','id');
        $users = User::pluck('name','id');

        return view('admin.empresas.edit', compact('empresa','categorias','users'));
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

    // Compress image
    public function compressedImage($source, $path, $quality) {

            $info = getimagesize($source);

            if ($info['mime'] == 'image/jpeg')
                $image = imagecreatefromjpeg($source);

            elseif ($info['mime'] == 'image/gif')
                $image = imagecreatefromgif($source);

            elseif ($info['mime'] == 'image/png')
                $image = imagecreatefrompng($source);

            imagejpeg($image, $path, $quality);

    }
}
