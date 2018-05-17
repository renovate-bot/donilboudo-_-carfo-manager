<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CashPayment;

use App\Pension;

class CashPaymentController extends Controller
{
    public function index()
    {
        $cashPayments = CashPayment::all();
        $pensions = Pension::all();
        $list = $pensions->map(function ($pension) 
        {
            $type = '';
            if ($pension->type == 'PENSION_RETRAIRE')
            {
                $type = 'PENSION DE RETRAITE';
            }
            else if ($pension->type == 'PENSION_REVERSION')
            {
                $type = 'PENSION DE REVERSION';
            }
            return ['value' => $type, 'pension_formatted_number' => $pension->group.'/'.$pension->sub_group, 'sub_group' => $pension->sub_group];
        });

        return view('cashPayments.index')->with('cashPayments', $cashPayments)
                                         ->with('pensions', $list->pluck('pension_formatted_number'));
    }

    public function create()
    {
        $pensions = Pension::all();

        $list = $pensions->map(function ($pension) 
        {
            $type = '';
            if ($pension->type == 'PENSION_RETRAIRE')
            {
                $type = 'PENSION DE RETRAITE';
            }
            else if ($pension->type == 'PENSION_REVERSION')
            {
                $type = 'PENSION DE REVERSION';
            }
            return ['value' => $type, 'pension_formatted_number' => $pension->group.'/'.$pension->sub_group, 'sub_group' => $pension->sub_group];
        });

        return view('cashPayments.create')->with('pensions', $list->pluck('pension_formatted_number'));
    }

    public function store(Request $request)
    {   
        $pensions = Pension::all();
        $payment_date= $request->payment_date;
        $selectedPensions = $request->pensions;
        $period = $request->period;
        
        if ($selectedPensions != null)
        {
            foreach($selectedPensions as $item)
            {
                $pension = $pensions[$item];
                $cashPayment = new CashPayment([    
                    'pension_id'    => $pension->id,
                    'period'        => $period,
                    'payment_date'  => $payment_date
                ]);

                $cashPayment->save();
            }
        }
        
        return redirect('cashpayments');
    }
}
