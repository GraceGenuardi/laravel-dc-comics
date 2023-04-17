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

    <!-- Form vista create -->
       <h2>Create Comic</h2>

         <form method="POST" action="{{ route('comics.store') }}">
            @csrf
                <input type="text" name="title" placeholder="Title">
                <br><br>
                <input type="text" name="author" placeholder="Author">
                <br><br>
                <input type="number" name="issue_number" placeholder="Issue Number">
                <br><br>
                <input type="date" name="publication_date" placeholder="Publication Date">
                <br><br>
                <button type="submit">Create</button>
        </form>

       
    </main>

</body>

</html>