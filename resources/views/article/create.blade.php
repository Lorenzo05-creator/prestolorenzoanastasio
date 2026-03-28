<!DOCTYPE html>
<html>
<head>
    <title>Crea Annuncio</title>
</head>
<body>

<h1>Inserisci Annuncio</h1>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('article.store') }}">
    @csrf

    <input type="text" name="title" placeholder="Titolo">
    <br><br>

    <textarea name="description" placeholder="Descrizione"></textarea>
    <br><br>

    <input type="number" name="price" placeholder="Prezzo">
    <br><br>

    <select name="category_id">
        <option value="">Scegli categoria</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">Crea</button>
</form>

</body>
</html>