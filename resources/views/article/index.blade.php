<x-app-layout>

<div class="container mx-auto py-10">

    <h1 class="text-3xl font-bold mb-6">
        Tutti gli annunci
    </h1>

    @if(session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    @forelse($articles as $article)

        <div class="border p-4 mb-4">
            <h2 class="text-xl font-bold">
                {{ $article->title }}
            </h2>

            <p>{{ $article->description }}</p>

            <p class="font-bold">
                {{ $article->price }} €
            </p>

            <a href="{{ route('article.show', $article) }}" 
               class="text-blue-500">
                Vai al dettaglio
            </a>
        </div>

    @empty
        <p>Nessun annuncio</p>
    @endforelse

</div>

</x-app-layout>