<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function user()
    {
    	$this->belongsTo('App\User');
    }
}
