<x-app-layout>

<div class="max-w-5xl mx-auto py-10">

    <h1 class="text-3xl font-bold mb-6">
        Tutti gli annunci
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        @forelse($articles as $article)

            <div class="border p-4 rounded shadow">

                <h2 class="text-xl font-bold">
                    {{ $article->title }}
                </h2>

                <p class="mt-2">
                    {{ $article->description }}
                </p>

                <p class="mt-2 font-bold">
                    {{ $article->price }} €
                </p>

                <a href="{{ route('article.show', $article) }}" 
                   class="text-blue-500 mt-2 inline-block">
                    Vai al dettaglio
                </a>

            </div>

        @empty
            <p>Nessun annuncio</p>
        @endforelse

    </div>

</div>

</x-app-layout>