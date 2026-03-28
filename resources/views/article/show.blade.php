<x-app-layout>

<div class="container mx-auto py-10">

    <h1 class="text-3xl font-bold">
        {{ $article->title }}
    </h1>

    <p class="mt-4">
        {{ $article->description }}
    </p>

    <p class="mt-4 font-bold">
        {{ $article->price }} €
    </p>

    <p class="mt-2">
        Categoria: {{ $article->category->name }}
    </p>

</div>

</x-app-layout>