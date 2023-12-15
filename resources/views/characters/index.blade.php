<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
<div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Bio</th>
            <th scope="col">Defense</th>
            <th scope="col">Speed</th>
            <th scope="col">Hp</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
            <tr>
                <td> {{ $character->name}}</td>
                <td> {{ $character->bio}}</td>
                <td>{{ $character->def}}</td>
                <td>{{ $character->speed}}</td>
                <td>{{ $character->hp}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>

</div>
</body>
