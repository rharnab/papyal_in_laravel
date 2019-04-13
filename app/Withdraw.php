<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    public function user()
    {
    	$this->belongsTo('App\User');
    }
}
