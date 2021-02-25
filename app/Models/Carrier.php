<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Carrier extends Model
{
    protected $table='carriers';
    protected $guarded = [];
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    public function getCarUsers()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
