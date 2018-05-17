@extends('layouts.master')

@section('header')
    
    <h2>Nouveau paiement a la caisse</h2>

@stop

@section('content')
    
    {!! Form::open(['url' => '/cashpayments']) !!}
    
        <div class="form-group">
            {!! Form::label('period', 'Période') !!}
            <div class="form-controls">
                <div class="row col-7">
                    {!! Form::select('period', array('1' => '1er trimestre', '2' => '2ème trimestre', '3' => '3ème trimestre', '4' => '4ème trimestre'), null); !!}
                </div>
            </div>
        </div>
        {{--  <div class="form-group">
            {!! Form::label('pension_type', 'Type de pension') !!}
            <div class="form-controls">
                <div class="row col-7">
                    {!! Form::select('size', array('' => '', 'PENSION_RETRAITE' => 'Pension de retraite', 'PENSION_REVERSION' => 'Pension de reversion'), null); !!}
                </div>
            </div>
        </div>  --}}
        <div class="form-group">
            {!! Form::label('pension', 'Pension') !!}
            <div class="form-controls">
                <div class="row col-7">
                    {!! Form::select('pensions[]', $pensions, null, array('multiple' => true)); !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('payment_date', 'Date de paiement') !!}
            <div class="form-controls">
                <div class="row col-3">
                    {!! Form::date('payment_date', null, array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="form-group pull-left">
            <a href="{{url()->previous()}}" class="btn btn-danger">Annuler</a>
            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
        </div>
    
    {!! Form::close() !!}
@stop