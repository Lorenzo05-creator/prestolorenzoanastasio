<x-app-layout>

<div class="max-w-5xl mx-auto py-10">

    <h1 class="text-4xl font-bold text-center mb-8">
        Presto.it
    </h1>

    <h2 class="text-2xl mb-6">
        Ultimi annunci
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        @foreach($articles as $article)
            <div class="bg-gray-800 p-4 rounded shadow">

                <h3 class="text-xl font-bold">
                    {{ $article->title }}
                </h3>

                <p class="text-gray-300 mt-2">
                    {{ $article->description }}
                </p>

                <p class="mt-2 text-blue-400 font-bold">
                    {{ $article->price }} €
                </p>

                <a href="{{ route('article.show', $article) }}" 
                   class="text-blue-400 mt-2 inline-block">
                    Dettaglio
                </a>

            </div>
        @endforeach

    </div>

</div>

</x-app-layout>