@extends('layouts.app')

@section('title-name', 'Characters - info')

@section('content')

<div class="container">
    <h1>Name: {{ $character->name }}</h1>
    <p>Def: {{ $character->def }}</p>
    <p>Speed: {{ $character->speed }}</p>
    <p>Hp: {{ $character->hp }}</p>
    <p>{{ $character->bio }}</p>
</div>

@endsection
