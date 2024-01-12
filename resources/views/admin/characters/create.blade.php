@extends('layouts.app')

@section('title-name', 'Characters - create')

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

                <form action="{{route("admin.characters.store")}}" method="POST" class="py-4">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old("name") }}">
                    </div>
                    <div class="mb-3">
                        <label for="type_id" class="form-label">Class</label>
                        <select name="type_id" id="type_id" class="form-control">
                            @foreach ($types as $type)
                            <option @selected( old('type_id') == $type->id ) value="{{ $type->id }}"> {{ $type->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="def" class="form-label">Def</label>
                        <input type="text" name="def" class="form-control" id="def" placeholder="Def" value="{{ old("def") }}">
                    </div>
                    <div class="mb-3">
                        <label for="speed" class="form-label">Speed</label>
                        <input type="text" name="speed" class="form-control" id="speed" placeholder="Speed" value="{{ old("speed") }}">
                    </div>
                    <div class="mb-3">
                        <label for="hp" class="form-label">Hp</label>
                        <input type="text" name="hp" class="form-control" id="hp" placeholder="Hp" value="{{ old("hp") }}">
                    </div>
                    <div class="mb-3 d-flex gap-3 flex-wrap">
                        <h4> Select items </h4>
                        <div class="d-flex gap-3 flex-wrap">
                            @foreach($items as $item)
                                <input
                                    name="items[]"
                                    class="form-check-input"
                                    type="checkbox" value="{{$item->id}}"
                                    id="item-{{$item->id}}"
                                    @checked(in_array($item->id, old('items', [])))
                                >
                                <label class="form-check-label" for="item-{{$item->id}}">
                                    {{$item->name}}
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea name="bio" class="form-control" id="bio" rows="3">{{ old("bio") }}</textarea>
                    </div>
                    <input type="submit" value="add character" class="btn btn-secondary">
                </form>
            </div>
        </div>
    </div>

@endsection
