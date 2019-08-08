<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ClassificadoCategory extends Model
{
    use LogsActivity;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'classificado_categories';

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
    protected $fillable = ['name', 'parent_id', 'published', 'logo', 'alias'];

    

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

    public function item(){
        return $this->hasMany('App\ClassificadoItem','category_id');
    }

    public function children()
    {
        return $this->belongsTo('App\ClassificadoCategory', 'parent_id');
    }

    public function getCategories(){
    	$categoires = $this->where('parent_id',0)->get();
    	$categoires = $this->addRelation($categoires);
    	return $categoires;
    }

    public function getCategoriesToSelect(){
       
        $categoires = $this->where('parent_id',0)->pluck('name','id');
        $categoires->prepend('Categoria Pai', '0');
        
    	return $categoires;
    }

    public function selectChild( $id ){
    	$categoires = $this->where('parent_id',$id)->get();
    	$categoires = $this->addRelation($categoires);    	
    	return $categoires;
    }

    public function addRelation( $categoires ){
        
    	$categoires->map(function( $item, $key){    		
    		
    		$sub = $this->selectChild($item->id); 
    		$item->itemCount = $this->getItemCount($item->id , $item->parent_id );
            
    		return $item = array_add($item, 'subCategory', $sub);
    	});
       
    	return $categoires;
    }
    public function getItemCount( $category_id, $parent_id ){
       
        if( $parent_id == 0){ // for root-caregory
             $ids = $this->select('id')->where('parent_id', $category_id)->get();
             $array = array();
             foreach ($ids as $id) {            
                $array[] =  $id->id;
             }  
            
             return ClassificadoItem::whereIn('category_id', $array )->count();                        
             
        }else{
            return ClassificadoItem::where('category_id', $category_id)->count();
        }
    }
}
