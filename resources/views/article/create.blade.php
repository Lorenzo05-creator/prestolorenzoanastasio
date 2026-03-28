<x-app-layout>

<div class="max-w-2xl mx-auto py-10">

    <h1 class="text-2xl font-bold mb-6">
        Inserisci un annuncio
    </h1>

    @if(session('success'))
        <p class="text-green-500 mb-4">
            {{ session('success') }}
        </p>
    @endif

    <form method="POST" action="{{ route('article.store') }}">
        @csrf

        <div class="mb-4">
    <input type="text" name="title" placeholder="Titolo"
           class="w-full border p-2 rounded text-black">
</div>

<div class="mb-4">
    <textarea name="description" placeholder="Descrizione"
              class="w-full border p-2 rounded text-black"></textarea>
</div>

<div class="mb-4">
    <input type="number" name="price" placeholder="Prezzo"
           class="w-full border p-2 rounded text-black">
</div>

<div class="mb-4">
    <select name="category_id" class="w-full border p-2 rounded text-black">
        <option value="">Scegli categoria</option>

        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

        <button class="bg-black text-white px-4 py-2 rounded">
            Inserisci
        </button>

    </form>

</div>

</x-app-layout>