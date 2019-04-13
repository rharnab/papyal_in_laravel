<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $table='payments';
    public $fillable = ['item_number','transaction_id','currency_code','payment_status'];
}
