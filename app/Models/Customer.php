<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Customer extends Model
{
    protected $table='customers';
    protected $guarded = [];
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    public function getUsers()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
