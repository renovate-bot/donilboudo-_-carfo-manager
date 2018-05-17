<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bank;

use App\BankTransfer;

use App\DeclarationSignature;

class BankTransferController extends Controller
{
    public function index()
    {
        $banks = Bank::all();
        $signatures = DeclarationSignature::all();
        $transfers = BankTransfer::all();

        $months = array('Janvier' => 'Janvier', 'Février' => 'Février', 'Mars' => 'Mars', 'Avril' => 'Avril', 'Mai' => 'Mai', 
                        'Juin' => 'Juin', 'Juillet' => 'Juillet', 'Aout' => 'Aout', 'Septembre' => 'Septembre', 'Octobre' => 'Octobre', 
                        'Novembre' => 'Novembre', 'Décembre' => 'Décembre');

        return view('bankTransfers.index')->with('banks', $banks->pluck('name'))
                                          ->with('months', $months)
                                          ->with('declarationSignatures', $signatures)
                                          ->with('bankTransfers', $transfers);
    }

    public function create()
    {
        return view('bankTransfers.create');
    }

    public function store(Request $request)
    {
        $transfer = new BankTransfer([    
            'period'   => $request->transferPeriod,
            'month'             => $request->month,
            'transfer_date'     => $request->transferDate
        ]);

        $transfer->save();

        return redirect('banktransfers');
    }
}
