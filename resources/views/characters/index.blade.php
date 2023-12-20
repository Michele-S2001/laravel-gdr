@extends('layouts.default')

@section('title-name', 'Characters - infos')

@section('main-content')

    <main class="main-content">
        <section class="characters-info py-3">
            <div class="container">
                <h1>Characters Info</h1>
                <a class="btn btn-sm btn-success" href="{{route('characters.create')}}">Add new</a>
                <table class="table table-striped mt-3">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">Name</th>
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
                                <td>{{ $character->def }}</td>
                                <td>{{ $character->speed }}</td>
                                <td>{{ $character->hp }}</td>

                                <td>
                                    <a href="{{route ('characters.show', $character)}}" class="btn btn-sm btn-primary">Details </a>
                                    <a href="{{route ('characters.edit', $character)}}" class="btn btn-sm btn-warning">Edit</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>
    </main>

@endsection


