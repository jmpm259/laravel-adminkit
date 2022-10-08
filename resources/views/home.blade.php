@extends('layouts.plantillabase')

@section('title','Home')
@section('h-title','Blank Page')
@section('card-title','Empty card')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged in!') }}
@endsection
