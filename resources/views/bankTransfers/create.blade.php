@extends('layouts.master')

@section('header')
    
    <h2>Nouveau virement banquaire</h2>

@stop

@section('content')
    <di>
        {!! Form::open(['url' => '/banktransfers']) !!}
        
        {{--  @include('partials.forms.category')  --}}
        
        {!! Form::close() !!}
    </di>

    <div>
        
    </div>
@stop