@extends('layouts.app')

@section('title-name', 'Characters - info')

@section('content')

<section class="py-5">
    <div class="container">
        <h1>Name: {{ $character->name }}</h1>
        <strong>{{$character->type->description}}</strong>
        <ul class="py-3">
            <li> Class: {{ $character->type->name}}</li>
            <li>Def: {{ $character->def }}</li>
            <li>Speed: {{ $character->speed }}</li>
            <li>Hp: {{ $character->hp }}</li>
            <li>{{ $character->bio }}</li>
        </ul>
    </div>
</section>

@endsection
