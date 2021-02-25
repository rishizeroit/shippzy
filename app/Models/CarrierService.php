<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarrierService extends Model
{
    protected $table='carrier_service';
    protected $guarded = [];
    
    public function service()
    {
        return $this->hasMany('App\Models\Service', 'id','service_id');
    }
}


