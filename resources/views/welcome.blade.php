<x-app-layout>

<div class="max-w-5xl mx-auto py-10">

    <h1 class="text-4xl font-bold text-center mb-8">
        Presto.it
    </h1>

    <h2 class="text-2xl mb-6">
        Ultimi annunci
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

       @forelse($articles as $article)

    <div class="border p-4 rounded shadow mb-4">

        <h3 class="text-xl font-bold">
            {{ $article->title }}
        </h3>

        <p class="mt-2">
            {{ $article->description }}
        </p>

        <p class="mt-2 font-bold">
            {{ $article->price }} €
        </p>

    </div>

@empty
    <p>Nessun annuncio</p>
@endforelse

</div>

</x-app-layout>