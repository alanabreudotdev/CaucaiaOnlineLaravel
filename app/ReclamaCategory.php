<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReclamaCategory extends Model
{
    use LogsActivity;
    use SoftDeletes;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reclama_categories';

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
    protected $fillable = ['name', 'status', 'icon','total_reclamacoes', 'icon_image_url'];

    

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

    public function subcategorias(){
        return $this->hasMany('App\ReclamaSubCategory','id');
    }

    public function reclamacao(){
        return $this->hasMany('App\Reclamacao','id');
    }

    public function getTotalReclamacao($categoria_id){
        return $this->where('id',$categoria_id)->first();
    }

    public function getCategorias(){
        return $this->where('status','1')->orderby('total_reclamacoes','desc')->paginate(100);
    }
}
