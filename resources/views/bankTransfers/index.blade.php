@extends('layouts.master')

@section('header')
    <h2>Programme de virements banquaire</h2>
   
    <div class="container">
        {{--  <a href="{{ url('banktransfers/create') }}" class="btn btn-outline-primary">
           Nouveau
        </a>  --}}
    </div>
@stop

@section('content')
    <div class="card-deck" style="margin-top: 50px;">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="color: red;">Signature des bulletins</h4>
                <div>
                    {!! Form::open(['url' => '/declarationsignatures']) !!}
                        <div class="row">
                            <div class="form-group">
                                {!! Form::label('bank', 'Banque') !!}
                                <div class="form-controls">
                                    <div class="row col-7">
                                        {!! Form::select('bank', $banks, null); !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 10px;">
                                {!! Form::label('lastNameLetter', 'Nom de famille') !!}
                                <div class="form-controls">
                                    <div class="row col-7">
                                        {!! Form::select('lastNameLetter', array('A-H' => 'A à H', 'I-P' => 'I à P', 'Q-Z' => 'Q à Z'), null); !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('signatureDate', 'Date de signature', array('style' => 'margin-left: 15px;')) !!}
                                <div class="form-controls">
                                    <div class="col-11">
                                        {!! Form::date('signatureDate', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pull-left" style="margin-top: 30px;">
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
                                <th scope="col">Banque</th>
                                <th scope="col">Date signature</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 1; ?>
                            @foreach ($declarationSignatures as $signature)
                                <tr>
                                    <th scope="row"> {{ $counter }}</th>
                                    <td>{{ $signature->bank->name }} ( {{ $signature->last_name_letter }} )</td>
                                    <td>{{ $signature->signature_date }}</td>
                                </tr>
                                <?php $counter += 1; ?>
                            @endforeach
                        </tbody>
                    </table>
               </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="color: red;">Virements banquaires</h4>
                <div>
                    {!! Form::open(['url' => '/banktransfers']) !!}
                        <div class="row">
                            <div class="form-group">
                                {!! Form::label('transferPeriod', 'Période') !!}
                                <div class="form-controls">
                                    <div class="row col-7">
                                        {!! Form::select('transferPeriod', array('MONTHLY' => 'Mensuel'), null); !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 10px;">
                                {!! Form::label('month', 'Mois') !!}
                                <div class="form-controls">
                                    <div class="row col-7">
                                        {!! Form::select('month', $months, null); !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('transferDate', 'Date de transfert', array('style' => 'margin-left: 15px;')) !!}
                                <div class="form-controls">
                                    <div class="col-11">
                                        {!! Form::date('transferDate', null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pull-left" style="margin-top: 30px;">
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
                                <th scope="col">Mois</th>
                                <th scope="col">Date signature</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter = 1; ?>
                            @foreach ($bankTransfers as $transfer)
                                <tr></tr>
                                    <th scope="row"> {{ $counter }}</th>
                                    <td>
                                        @if ($transfer->period == 'MONTHLY')
                                            MENSUEL
                                        @endif
                                    </td>
                                    <td>{{ $transfer->month }}</td>
                                    <td>{{ $transfer->transfer_date }}</td>
                                </tr>
                                <?php $counter += 1; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop