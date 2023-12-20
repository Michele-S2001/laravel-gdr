@extends('layouts.default')

@section('title-name', 'Characters - create')

@section('main-content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">

                <form action="{{route("characters.store")}}" method="POST" class="py-4">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="def" class="form-label">Def</label>
                        <input type="text" name="def" class="form-control" id="def" placeholder="Def">
                    </div>
                    <div class="mb-3">
                        <label for="speed" class="form-label">Speed</label>
                        <input type="text" name="speed" class="form-control" id="speed" placeholder="Speed">
                    </div>
                    <div class="mb-3">
                        <label for="hp" class="form-label">Hp</label>
                        <input type="text" name="hp" class="form-control" id="hp" placeholder="Hp">
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea name="bio" class="form-control" id="bio" rows="3"></textarea>
                    </div>
                    <input type="submit" value="add character" class="btn btn-secondary">
                </form>
            </div>
        </div>
    </div>

@endsection
