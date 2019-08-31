<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use LogsActivity;
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'empresas';

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
    protected $fillable = ['nome', 'horario_func','empresa_package_id', 'whatsapp', 'telefone', 'latitude', 'longitude', 'total_reviews', 'website_url', 'address', 'description', 'category_id', 'instagram', 'facebook', 'twitter', 'youtube', 'foto_01', 'foto_02', 'foto_03', 'foto_04', 'foto_05', 'foto_06', 'foto_07', 'foto_08', 'foto_09', 'imagem_principal', 'status', 'owner_user_id', 'featured'];



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

    public function package(){
      return $this->belongsTo('App\EmpresaPackage', 'empresa_packages_id');
    }

    public function categoria(){
      return $this->belongsTo('App\EmpresaCategory', 'category_id');
    }
}
