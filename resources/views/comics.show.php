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

        <!-- Tabella vista show -->
        <h2>{{ $comic->title }}</h2>

         <p><strong>Author:</strong> {{ $comic->author }}</p>
         <p><strong>Issue Number:</strong> {{ $comic->issue_number }}</p>
         <p><strong>Publication Date:</strong> {{ $comic->publication_date }}</p>


         <!-- PARTE DUE: aggiungere nell interfaccia tutti link necessari per raggiungere le varie pagine corrispondenti alle rotte -->
         <form action="{{ route('store') }}" method="post">
                @csrf 
                <label for="name">Nome</label> 
                <input type="text" name="name"> 
                <label for="email">Email</label> 
                <input type="email" name="email"> 
                <input type="submit" value="Salva"> 
         </form> 
         
         <form action="{{ route('update', $resource->id) }}" method="post"> 
                @csrf @method('put') 
                <label for="name">Nome</label> 
                <input type="text" name="name" value="{{ $resource->name }}"> 
                <label for="email">Email</label> 
                <input type="email" name="email" value="{{ $resource->email }}"> 
                <input type="submit" value="Aggiorna"> 
        </form>    

    </main>

</body>

</html>