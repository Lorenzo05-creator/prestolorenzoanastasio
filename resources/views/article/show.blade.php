<x-app-layout>

<div class="max-w-3xl mx-auto py-10">

    <h1 class="text-3xl font-bold">
        {{ $article->title }}
    </h1>

    <p class="mt-4">
        {{ $article->description }}
    </p>

    <p class="mt-4 font-bold">
        {{ $article->price }} €
    </p>

    <div class="mt-6">
        <a href="{{ route('article.index') }}" class="text-blue-500">
            Torna agli annunci
        </a>
    </div>

</div>

</x-app-layout>