<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReclamacaoApoioLog extends Model
{
    protected $table = 'ipaddress_apoios_map';

    protected $primaryKey = 'id';

    protected $fillable = ['reclamacao_id','ip_address'];

    
}
