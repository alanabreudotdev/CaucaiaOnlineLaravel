<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClassificadoCategory;
use App\ClassificadoItem;
use Validator;
use Flash;
use ConsoleTVs\Profanity\Facades\Profanity;
use App\Traits\UploadTrait;

class ClassificadosController extends Controller
{
    use UploadTrait;

    public function __construct(ClassificadoCategory $classCat, ClassificadoItem $classItem){
        $this->classCat = $classCat;
        $this->classItem = $classItem;
    }

    public function index(){

        $titulo = 'Classificados';

        return view('front.classificados.index', compact('titulo'));
    }

    /**
     * PAGE CATEGORIAS ANUNCIO
     */
    public function categoriasListar(){

        $titulo = 'Classificados|Categorias';

        $Category = new ClassificadoCategory;
        $allCategories = $Category->getCategories();  

        return view('front.classificados.categorias', compact('titulo','allCategories','Category'));
    }

    /**
     * PAGE NOVO ANUNCIO
     */
    public function novoanuncio(){

        $titulo = 'Classificados|Novo Anúncio';

        $Category = new ClassificadoCategory;
        $categories = $Category->getCategories();

        return view('front.classificados.novoanuncio', compact('titulo','Category','categories'));


    }

    public function novoAnuncioPost(Request $request)   {
        $validator = Validator::make($request->all(),  [
			'category_id' => 'required',
			'titulo' => 'required',
			'descricao' => 'required',
            'tipo' => 'required',
            'preco' => 'required',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cep' => 'required',
            'celular' => 'required',
            'image'  =>  'image|mimes:jpeg,png,jpg,gif|max:2048'
			
        ]);
        
        if ($validator->fails()) {
            Flash::error('','Verifique os campos e tente novamente.');
            
            return redirect()
                ->route('classificados.front.anunciar')
                ->withErrors($validator)
                ->withInput();
        }

        $requestData = $request->all();
        
        $save = $this->classItem->create($requestData);
        
        if($save){
            if ($request->has('image')) {
                // Get image file
                $image = $request->file('image');
                // Make a image name based on user name and current timestamp
                $name = 'anuncio_id_'.$save->id.'_'.str_slug($requestData['titulo']).'_'.time();
                // Define folder path
                $folder = '/uploads/images/classificados/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                // Upload image
                $this->uploadOne($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
                $requestData['image'] = $filePath;
            }

            if ($request->has('image_01')) {
                // Get image file
                $image = $request->file('image_01');
                // Make a image name based on user name and current timestamp
                $name = 'anuncio_id_'.$save->id.'_'.str_slug($requestData['titulo']).'_'.time();
                // Define folder path
                $folder = '/uploads/images/classificados/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                // Upload image
                $this->uploadOne($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
                $requestData['image_01'] = $filePath;
            }

            if ($request->has('image_02')) {
                // Get image file
                $image = $request->file('image_02');
                // Make a image name based on user name and current timestamp
                $name = 'anuncio_id_'.$save->id.'_'.str_slug($requestData['titulo']).'_'.time();
                // Define folder path
                $folder = '/uploads/images/classificados/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                // Upload image
                $this->uploadOne($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
                $requestData['image_02'] = $filePath;
            }

            if ($request->has('image_03')) {
                // Get image file
                $image = $request->file('image_03');
                // Make a image name based on user name and current timestamp
                $name = 'anuncio_id_'.$save->id.'_'.str_slug($requestData['titulo']).'_'.time();
                // Define folder path
                $folder = '/uploads/images/classificados/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                // Upload image
                $this->uploadOne($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
                $requestData['image_03'] = $filePath;
            }
           
            Flash::success('','Anúncio cadastrado com sucesso!');
            return redirect()->route('classificados.front.index');
        }else{
            Flash::warning('','Anúncio cadastrado com sucesso!');
            return redirect()
                ->route('classificados.front.anunciar')
                ->withErrors($validator)
                ->withInput();
        }
        
    }

    
}
