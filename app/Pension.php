<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pension extends Model
{
    protected $fillable = ['type', 'group', 'sub_group'];

    public function cashPayment()
    {
        return $this->belongsTo('App\CashPayment');
    }
}
