<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankTransfer extends Model
{
    protected $fillable = array('period', 'month', 'transfer_date');

    public function pensions()
    {
        return $this->hasMany('App\Pension');
    }
}
