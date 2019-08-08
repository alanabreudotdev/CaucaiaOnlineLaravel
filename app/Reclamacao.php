<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reclamacao extends Model
{
    use LogsActivity;
    use SoftDeletes;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reclamacaos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['url_video','latitude','longitude','respondida','slug','reclama_category_id', 'reclama_sub_category_id', 'user_id', 'titulo', 'texto_reclamacao', 'foto_url_01', 'foto_url_02', 'foto_url_03', 'endereco', 'celular', 'telefone', 'status', 'resolvido'];

    

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }

    public function categories(){
        return $this->belongsTo('App\\ReclamaCategory','reclama_category_id');
    }

    public function subcategories(){
        return $this->belongsTo('App\\ReclamaSubCategory','reclama_sub_category_id');
    }

    public function user(){
        return $this->belongsTo('App\\User','user_id')->select('name','lastname','email','cpf','id', 'photo_url', 'reclamacao_privacidade');
    }

    public function totalReclamacoes(){
        return $this->where('status','1')->count();
    }

    public function totalReclamacoesNaoRespondidas(){
        return $this->where('respondida','0')->where('status','1')->count();
    }
    public function totalReclamacoesRespondidas(){
        return $this->where('respondida','1')->where('status','1')->count();
    }

    public function totalReclamacoesResolvido(){
        return $this->where('resolvido','1')->where('status','1')->count();
    }

    public function answers(){
        return $this->hasMany('App\\ReclamaAnswer','reclamacao_id');
    }

    public function getTotalApoio($id){
        return $this->select('id','apoio')->where('id',$id)->first();
    }

    public function getMaisApoiadas($quantidade = 5){
        return $this->where('status','1')->with('categories')->orderby('apoio','desc')->paginate($quantidade);
    }

    public function getLocationsToMap($id=null, $category_id=null){
        if($id || $category_id){
            $locations = Reclamacao::select('apoio','id','foto_url_01','endereco','latitude', 'longitude','titulo','id','slug','reclama_category_id')
                        ->with('categories')
                        ->where('id',$id)
                        ->orWhere('reclama_category_id', $category_id)
                        ->where('latitude','<>',null)->get();
        }else{
            $locations = Reclamacao::select('apoio','id','foto_url_01','endereco','latitude', 'longitude','titulo','id','slug','reclama_category_id')
                        ->with('categories')
                        ->where('latitude','<>',null)->get();
        }
        return $locations;
    }

    public function mapJson($category = null, $id = null)
    {
         //pega a localizao para passar ao mapa
         return $locations_get = Reclamacao::getLocationsToMap($id, $category);  
    }

    /**
     * metodo que gera o json para alimentar os dados para os mapas
     */
    public function toJson($locations_get = null){

        // GERAR DADOS PARA ALIMENTAR O MAPA
        if(count($locations_get)>0){
            
            foreach($locations_get as $loc)
            {
                //$output['data'][] creates a new entry in the array
            $locations[] = ([
                "id"=> $loc->id,
                "longitude"=> $loc->longitude,
                "latitude"=> $loc->latitude,
                "image"=> $loc->foto_url_01,
                "categoria_name" => $loc->categories->name,
                "title"=> $loc->titulo,
                "url"=> "/reclamar/ver/".$loc->id."/".$loc->slug,
                "icon" => $loc->categories->icon,
                "featured"=> 'no',
                "marker"=> '/storage/'.$loc->categories->icon_image_url,
                'apoio' =>$loc->apoio,
                'endereco' => $loc->endereco
            ]);	

            
            }
                }else{
                    $locations['data'] = array('status'=>'');  
                }
           
    if(count($locations_get)>0){
       
        $dados = array('listing' => $locations);

        $status = $dados['status'] = 'found';             
        // Adiciona o identificador "Data" aos dados
        $locations = array('data' => $dados);
        

        }else{
        // Adiciona o identificador "Contatos" aos dados
        $dados = array('listing' => $locations);
        // Atribui os 3 arrays apenas um array

        $status = $dados['status'] = '';             
        // Adiciona o identificador "Data" aos dados
        $locations = array('data' => $dados);
        

    }       
    array_push($dados,$status); 

    return $locations = array_reverse($dados);

    }
}
