<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeclarationSignature extends Model
{
    protected $fillable = array('bank_id', 'last_name_letter', 'signature_date');

    public function bank()
    {
        return $this->hasOne('App\Bank', 'id', 'bank_id');
    }
}
