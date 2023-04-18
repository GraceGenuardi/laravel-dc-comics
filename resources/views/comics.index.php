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

    <main class="bg-light">

    <!-- Tabella vista index -->
            <table>

                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Issue Number</th>
                        <th>Publication Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($comics as $comic)
                        <tr>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->author }}</td>
                            <td>{{ $comic->issue_number }}</td>
                            <td>{{ $comic->publication_date }}</td>
                            <td><a href="{{ route('comics.show', $comic->id) }}">Show</a></td>
                        </tr>
                    @endforeach

                    <!-- INSERIMENTO BOTTONE DESTROY -->
                    <form action="{{ route('comics.destroy.all') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger btn-sm" type="submit" value="Elimina tutte">
                    </form>
                </tbody>
        </table>
    </main>

</body>

</html>