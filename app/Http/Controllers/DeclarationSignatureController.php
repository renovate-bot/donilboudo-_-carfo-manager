<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bank;

use App\DeclarationSignature;

class DeclarationSignatureController extends Controller
{
    public function store(Request $request)
    {
        $banks = Bank::all();
        $bank = $banks[$request->bank];

        $signature = new DeclarationSignature([    
            'bank_id'             => $bank->id,
            'last_name_letter'    => $request->lastNameLetter,
            'signature_date'      => $request->signatureDate
        ]);
        
       $signature->save();
        
        return redirect('banktransfers');
    }
}
