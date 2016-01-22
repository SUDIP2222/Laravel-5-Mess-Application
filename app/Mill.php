<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mill extends Model
{

    protected $fillable=[
      'name'
    ];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
