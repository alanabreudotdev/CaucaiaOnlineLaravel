<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReclamaCategory;
use App\Reclamacao;
use App\ReclamaSubCategory;

class IndexController extends Controller
{
    public function __construct(Reclamacao $rcl, ReclamaCategory $rclCat){
        $this->rcl = $rcl;
        $this->rclCat = $rclCat;
    }

    public function getReclamaCategories(){
        
        $categorias = $this->rclCat->orderby('name','asc')->get();

        return json_encode($categorias);
    }
}
