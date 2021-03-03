<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Trailer extends Model
{
    protected $table='trailers';
    protected $guarded = [];
    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
