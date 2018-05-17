<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashPayment extends Model
{
    protected $fillable = array('year', 'period', 'pension_id', 'payment_date');

    public function pension()
    {
        return $this->hasOne('App\Pension', 'id', 'pension_id');
    }
}