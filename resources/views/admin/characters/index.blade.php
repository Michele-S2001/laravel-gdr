@extends('layouts.app')

@section('title-name', 'Characters - infos')

@section('content')

    <main class="main-content">
        <section class="characters-info py-3">
            <div class="container">
                <h1>Characters Info</h1>
                <a class="btn btn-sm btn-success" href="{{route('admin.characters.create')}}">Add new</a>
                <table class="table table-striped mt-3">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Defense</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Hp</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($characters as $character)
                            <tr>
                                <td>{{ $character->name }}</td>
                                <td>{{ $character->type->name }}</td>
                                <td>{{ $character->def }}</td>
                                <td>{{ $character->speed }}</td>
                                <td>{{ $character->hp }}</td>

                                <td class="d-flex gap-3">
                                    <a href="{{route ('admin.characters.show', $character)}}" class="btn btn-sm btn-primary">Details </a>
                                    <a href="{{route ('admin.characters.edit', $character)}}" class="btn btn-sm btn-warning">Edit</a>
                                    <form id="{{'form-'.$character->id}}" action="{{route('admin.characters.destroy', $character->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input data-delete data-target="#form-{{ $character->id }}"  class="btn btn-sm btn-danger" type="submit" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <div class="c-modal text-center">
        <div class="c-modal__inner p-4">
            <h5 class="mb-4">are you sure you want to delete this item?</h5>
            <button id="destroy" class="btn btn-danger">Yes, delete this </button>
            <button id="undo" class="btn btn-secondary">No, I changed my mind</button>
        </div>
    </div>

@endsection


