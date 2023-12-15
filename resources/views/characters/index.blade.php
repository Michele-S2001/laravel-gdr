@extends('layouts.default')

@section('title-name', 'Characters - infos')

@section('main-content')

    <main class="main-content">
        <section class="characters-info py-3">
            <div class="container">
                <h1>Characters Info</h1>
                <table class="table table-striped mt-3">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Defense</th>
                            <th scope="col">Speed</th>
                            <th scope="col">Hp</th>
                            <th scope="col">Bio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($characters as $character)
                            <tr>
                                <td>{{ $character->name }}</td>
                                <td>{{ $character->def }}</td>
                                <td>{{ $character->speed }}</td>
                                <td>{{ $character->hp }}</td>
                                <td>{{ $character->bio }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>

@endsection


