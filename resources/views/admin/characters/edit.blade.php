@extends('layouts.app')

@section('title-name', 'Characters - edits')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.characters.update', $character->id) }}" method="POST" class="py-4">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name', $character->name) }}">
                </div>
                <div class="mb-3">
                    <label for="def" class="form-label">Def</label>
                    <input type="text" name="def" class="form-control" id="def" placeholder="Def" value="{{ old('def', $character->def) }}">
                </div>
                <div class="mb-3">
                    <label for="speed" class="form-label">Speed</label>
                    <input type="text" name="speed" class="form-control" id="speed" placeholder="Speed" value="{{ old('speed', $character->speed) }}">
                </div>
                <div class="mb-3">
                    <label for="hp" class="form-label">Hp</label>
                    <input type="text" name="hp" class="form-control" id="hp" placeholder="Hp" value="{{ old('hp', $character->hp) }}">
                </div>
                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea name="bio" class="form-control" id="bio" rows="3">{{ old('bio', $character->bio) }}</textarea>
                </div>
                <input type="submit" value="Save" class="btn btn-secondary">
                <a class="btn btn-danger mx-5 d-inline-block" href="{{route('admin.characters.index')}}">Undo</a>
            </form>
        </div>
    </div>
</div>

@endsection
