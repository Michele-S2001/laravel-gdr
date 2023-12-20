@extends('layouts.default')

@section('title-name', 'Characters - info')

@section('main-content')

<div class="container">
    <h1> {{ $character->name }}</h1>
    <p>{{ $character->bio }}</p>
    <p>  {{ $character->def }}</p>
    <p> {{ $character->speed }}</p>
    <p>  {{ $character->hp }}</p>
    
</div>

@endsection