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

        <h3> Items </h3>
        <div class="row row-gap-3">
            @foreach ($character->items as $item) 
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                    <h4> {{ $item->name }} </h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> Price: {{ $item->price }}</li>
                        <li class="list-group-item"> {{ $item->description }} </li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
