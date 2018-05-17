@extends('layouts.master')

@section('header')
    <h2>Programme de paiement à la caisse</h2>
   
    <div class="container">
        {{--  <a href="{{ url('cashpayments/create') }}" class="btn btn-outline-primary">
           Nouveau
        </a>  --}}
    </div>
@stop

@section('content')
<div class="card-deck" style="margin-top: 50px;">
        <div class="card">
            <div class="card-body">
                {{--  <h4 class="card-title" style="color: red;">Signature des bulletins</h4>  --}}
                <div>
                    {!! Form::open(['url' => '/cashpayments']) !!}
                        
                        <div class="form-group row">
                            <div class="form-group col-md-1">
                                {!! Form::label('period', 'Période') !!}
                                <div class="form-controls">
                                    <div class="row">
                                        {!! Form::select('period', array('1' => '1er trimestre', '2' => '2ème trimestre', '3' => '3ème trimestre', '4' => '4ème trimestre'), null); !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-1" style="margin-left: 100px;">
                                {!! Form::label('pension', 'Pension', array('style' => 'margin-left: -10px;')) !!}
                                <div class="form-controls">
                                    <div class="row">
                                        {!! Form::select('pensions[]', $pensions, null, array('multiple' => true, 'style' => 'width: 70px;')); !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-2" style="margin-left: 50px;">
                                {!! Form::label('payment_date', 'Date de paiement') !!}
                                <div class="form-controls">
                                    <div class="row col-14">
                                        {!! Form::date('payment_date', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pull-left" style="margin-left:  50px;margin-top: 30px;">
                                {{--  <a href="{{url()->previous()}}" class="btn btn-danger">Annuler</a>  --}}
                                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
               </div>
               <br>
               <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Période</th>
                                <th scope="col">Pension</th>
                                <th scope="col">Date de paiement</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 1; ?>
                            @foreach ($cashPayments as $payment)
                                <tr>
                                    <th scope="row"> {{ $counter }}</th>
                                    <td>{{ $payment->pension->group }} / {{ $payment->pension->sub_group}}</td>
                                    <td>
                                        @if($payment->period == '1')
                                            {{ $payment->period }}er semestre
                                        @else
                                            {{ $payment->period }}ème semestre
                                        @endif
                                    </td>
                                    <td>{{ $payment->payment_date }}</td>
                                </tr>
                                <?php $counter += 1; ?>
                            @endforeach
                        </tbody>
                    </table>
               </div>
            </div>
        </div>
    <br>
@stop