<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ReclamaCategory;
use App\ReclamaSubCategory;
use Validator;
use Flash;
use Auth;
use App\Reclamacao;
use Illuminate\Support\Str;
use App\ReclamaAnswer;
use App\ReclamacaoApoioLog;
use App\ReclamaApoio;
use SEO;
use SEOMeta;
use OpenGraph;

use App\Traits\UploadTrait;

class ReclamarController extends Controller
{
    use UploadTrait;

    public function __construct(ReclamaCategory $rclCategory, Request $rqst, Reclamacao $rcl){

        $this->rclCategory = $rclCategory;
        $this->rqst = $rqst;
        $this->rcl = $rcl;
    }

    public function index(){
        $titulo = 'Reclamações - Índice';

        $categorias = $this->rclCategory->orderby('name','asc')->paginate(12);


        return view('front.reclamacao.index', compact('titulo', 'categorias'));
    }

    public function reclamarOpen($id){
        $titulo = 'Nova Reclamação';

        $categoria = ReclamaCategory::find($id);

        if($categoria == null){
            return back();
        }
        $subcategorias = ReclamaSubCategory::where('reclama_category_id',$id)->get();


        return view('front.reclamacao.open', compact('titulo','categoria','subcategorias'));
    }

    public function reclamarPost(Request $request){

        $validator = Validator::make($request->all(), [

            'reclama_sub_category_id' => 'required',
            'titulo'   => "required",
            'texto_reclamacao' => 'required',
            'endereco'   => "required",
            'celular'   => "required",
        ]);

        if ($validator->fails()) {
            Flash::error('','Verifique os dados digitados e tente novamente.');

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $input = $request->except('_token');

        // Get current user
        $input['user_id'] = Auth::user()->id;
        $input['slug'] = Str::slug($input['titulo']);
        $input['status'] = 1;

        //GET TOTAL RECLAMACOES PER CATEGORY
        $total = $this->rclCategory->getTotalReclamacao($input['reclama_category_id']);
        $total->total_reclamacoes = $total->total_reclamacoes + 1;
        $total->save();

        // Persist user record to database
        $save = Reclamacao::create($input);
        if($save){

            // Check if a profile image has been uploaded
            if ($request->has('foto_url_01')) {

              //dd($request->file('foto_url_01')['name']);
                // Get image file
                $image = $request->file('foto_url_01');
                // Make a image name based on user name and current timestamp
                $name = str_slug($save->id.'_'.time().'_'. str_random(10));
                // Define folder path
                $folder = '/uploads/images/reclamacao/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                // Upload image

                //dd(storage_path().'/app/public'.$filePath);
                $this->uploadOne($image, $folder, 'public', $name);

                $this->compressedImage(storage_path().'/app/public'.$filePath, storage_path().'/app/public'.$filePath,30);
                // Set user profile image path in database to filePath
                $save->foto_url_01 = $filePath;
                $save->save();
            }

           // Check if a profile image has been uploaded
        if ($request->has('foto_url_02')) {
            // Get image file
            $image = $request->file('foto_url_02');
            // Make a image name based on user name and current timestamp
            $name = str_slug($save->id.'_'.time().'_'. str_random(10));
            // Define folder path
            $folder = '/uploads/images/reclamacao/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath

            //compress image
             $this->compressedImage(storage_path().'/app/public'.$filePath, storage_path().'/app/public'.$filePath,30);

            $save->foto_url_02 = $filePath;
            $save->save();
        }

        // Check if a profile image has been uploaded
        if ($request->has('foto_url_03')) {
            // Get image file
            $image = $request->file('foto_url_03');
            // Make a image name based on user name and current timestamp
            $name = str_slug($save->id.'_'.time().'_'. str_random(10));
            // Define folder path
            $folder = '/uploads/images/reclamacao/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
           //compress image
            $this->compressedImage(storage_path().'/app/public'.$filePath, storage_path().'/app/public'.$filePath,30);

            $save->foto_url_03 = $filePath;
            $save->save();
        }

        }

        // Return user back and show a flash message
        Flash::success('','Reclamação registrada com sucesso.');//flash message teste
        return redirect('/reclamar/ver/'.$save->id.'/'.$save->slug);
    }

    /*
    *
    * LISTAR RECLAMAÇÕES POR CATEGORIA
    * param: reclama_category_id
    */
    public function reclamarListar($id = null){

         //LISTA CATEGORIAS PARA PASSAR PARA MENU LATERAL
         $categorias = ReclamaCategory::orderby('total_reclamacoes','desc')->paginate(20);

        if($id != 'todas'){

            $categoria = $this->rclCategory->where('id',$id)->first();
            $titulo = $categoria->name;

            $perPage = 10;

                $reclamacoes = Reclamacao::where('reclama_category_id',$id)->orderby('id','desc')->paginate(10);
                //PEGA OS DADOS PARA ALIMENTAR OS MAPAS
                $locations = $this->rcl->mapJson($id, null);
                //TRATA OS DADOS E TRANSFORMANDO EM JSON
                $locations = $this->rcl->toJson($locations);

            }else{
            $categoria = null;
            $titulo = 'Listagem de Reclamações';

                $reclamacoes = Reclamacao::latest()->paginate(10);
                //PEGA OS DADOS PARA ALIMENTAR OS MAPAS
                $locations = $this->rcl->mapJson();

                //TRATA OS DADOS E TRANSFORMANDO EM JSON
                $locations = $this->rcl->toJson($locations);


        }



        return view('front.reclamacao.listar', compact('titulo', 'categoria','reclamacoes','locations','categorias'));
    }

    /*
    *
    * VER RECLAMAÇÃO(DETALHES)
    *param: id da reclamacao
    *
    */
    public function reclamarVer($id){

         //LISTA CATEGORIAS PARA PASSAR PARA MENU LATERAL
         $categorias = ReclamaCategory::orderby('total_reclamacoes','desc')->paginate(20);

        $reclamacao = Reclamacao::where('id',$id)->with('answers','user','categories', 'subcategories')->first();

        $titulo = $reclamacao->titulo;


       //PEGA OS DADOS PARA ALIMENTAR OS MAPAS
       $locations = $this->rcl->mapJson(null, $id);
       //TRATA OS DADOS E TRANSFORMANDO EM JSON
       $locations = $this->rcl->toJson($locations);


      //SEOMeta::setTitle($reclamacao->titulo);
      SEOMeta::setDescription($reclamacao->titulo);
      SEOMeta::addMeta('article:published_time', $reclamacao->created_at->toW3CString(), 'property');
      SEOMeta::addMeta('article:section', $reclamacao->categories->name, 'property');
      SEOMeta::addKeyword(['caucaia', 'caucaia online', 'prefeitura caucaia', 'cumbuco', 'reclamar caucaia']);

      OpenGraph::setDescription($reclamacao->titulo);
      //OpenGraph::setTitle($reclamacao->titulo);
      OpenGraph::setUrl('https://caucaia.online/reclamar/ver/'.$reclamacao->id.'/'.$reclamacao->slug);
      OpenGraph::addProperty('type', 'article');
      OpenGraph::addProperty('locale', 'pt-br');
      OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

      OpenGraph::addImage('https://caucaia.online/storage'.$reclamacao->foto_url_01);
      //OpenGraph::addImage($post->images->list('url'));
      OpenGraph::addImage(['url' => 'https://caucaia.online/storage'.$reclamacao->foto_url_01, 'size' => 300]);
      OpenGraph::addImage('https://caucaia.online/storage'.$reclamacao->foto_url_01, ['height' => 300, 'width' => 300]);

    return view('front.reclamacao.ver',compact('titulo','reclamacao', 'locations', 'categorias'));
    }

    /**
     * reposta reclamacao
     * Tipo:
     * 1 - primeira reposta servico
     * 2 - resposta user == Nao resolvido
     * 3 - resposta user == Resolvido
     * 4 - ultima resposta serviço publico
     */
    public function reclamacaoResponder(Request $request){

        $validator = Validator::make($request->all(), [
            'texto_comentario' => 'required',
            'reclamacao_id' => 'required',
            'tipo'  => 'required'
        ]);
            if($validator->fails()){
                Flash::error('','Verifique os dados digitados e tente novamente.');

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }

            $input = $request->except('_token');
            $input['user_id'] = Auth::user()->id;

            $save = ReclamaAnswer::create($input);

            if($save){
                $dados = [
                    'respondida' => 1
                ];
                if($input['tipo']==3){
                    $dados['resolvido'] = 1;
                }
            $reclamacao = Reclamacao::where('id',$input['reclamacao_id'])->first();
            $reclamacao->update($dados);

            }
            Flash::success('','Resposta enviada com sucesso!');
            return redirect()->back();

    }

    public function ajaxApoio($id = null, Request $request){


      if($id == null){
        $id = $request->id;
      }

      $apoio = ReclamaApoio::where('user_id',$request->user_id)->where('reclamacao_id', $id)->first();
      if($apoio == null){
        //PEGA DADOS ADICIONA +1 APOIO
        $dados = $this->rcl->getTotalApoio($id);
        $apoio['apoio'] = $dados->apoio +1;

        $save = $this->rcl->where('id',$id)->update($apoio);

        $dadosApoio = [
            'user_id' => $request->user_id,
            'reclamacao_id' => $id
        ];

        $saveApoio = ReclamaApoio::create($dadosApoio);

        $retorno = $this->rcl->getTotalApoio($id);
      }else {
        //PEGA DADOS ADICIONA -1 APOIO
        $dados = $this->rcl->getTotalApoio($id);
        $total = $dados->apoio -1;

        $apoio = [
          'id' =>$id,
          'apoio' => $total
        ];


        //dd($this->rcl->where('id',$id)->first());
        $save = $this->rcl->where('id',$id)->update($apoio);

        $apoio = ReclamaApoio::where('user_id',$request->user_id)->where('reclamacao_id', $id)->first();
        $apoio->destroy($apoio->id);

        $retorno = $this->rcl->getTotalApoio($id);

      }
      if($request->app == false){
          return $retorno->apoio;
      }else{
        if($retorno){
        return response()->json([
          'success'=>true,
          'data'=>$retorno
        ]);
      }else{
        return response()->json([
          'success'=>false,
          'message'=> 'Error'
        ]);
      }
    }


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



    /*
    public function ajaxApoio($id = null, Request $request){
        if($id == null){
          $id = $request->id;
        }
        $ip_address = $_SERVER['REMOTE_ADDR'];

        $ip = ReclamacaoApoioLog::where('ip_address',$ip_address)->where('reclamacao_id', $id)->first();

        if(!$ip){
            //PEGA DADOS ADICIONA +1 APOIO
            $dados = $this->rcl->getTotalApoio($id);
            $apoio['apoio'] = $dados->apoio +1;

            $save = $this->rcl->where('id',$id)->update($apoio);

            $dadosIp = [
                'ip_address' => $ip_address,
                'reclamacao_id' => $id
            ];

            $saveIp = ReclamacaoApoioLog::create($dadosIp);

            $retorno = $this->rcl->getTotalApoio($id);

        }else{
            //PEGA DADOS ADICIONA -1 APOIO
            $dados = $this->rcl->getTotalApoio($id);
            $apoio['apoio'] = $dados->apoio -1;

            $save = $this->rcl->where('id',$id)->update($apoio);
            $ip = ReclamacaoApoioLog::where('ip_address',$ip_address)->where('reclamacao_id', $id)->first();
            $ip->destroy($ip->id);

            $retorno = $this->rcl->getTotalApoio($id);
        }

        return $retorno->apoio;

    }
    */

}
