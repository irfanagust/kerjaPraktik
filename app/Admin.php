<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $fillable = [
        'user_id','nama','alamat','no_hp'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
