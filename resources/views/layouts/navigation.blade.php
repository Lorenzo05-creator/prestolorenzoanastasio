<nav class="bg-gray-900 text-white shadow-md mb-6">

    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <!-- LEFT -->
            <div class="flex items-center gap-10">

                <a href="{{ route('homepage') }}" class="text-2xl font-bold">
                    Presto
                </a>

                <a href="{{ route('article.index') }}" 
                   class="hover:text-gray-300 transition">
                    Annunci
                </a>

                <!-- DROPDOWN -->
                <div class="relative group">
                    <button class="hover:text-gray-300 transition">
                        Categorie ⌄
                    </button>

                    <div class="absolute left-0 mt-2 w-48 bg-gray-800 border border-gray-700 rounded shadow hidden group-hover:block z-50">

                        @foreach(App\Models\Category::all() as $category)
                            <a href="{{ route('article.byCategory', $category) }}"
                               class="block px-4 py-2 hover:bg-gray-700">
                                {{ $category->name }}
                            </a>
                        @endforeach

                    </div>
                </div>

            </div>

            <!-- RIGHT -->
            <div class="flex items-center gap-6">

                @auth
                    <a href="{{ route('article.create') }}" 
                       class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">
                        + Inserisci
                    </a>

                    <span class="text-gray-300">
                        {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-red-400 hover:text-red-500">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:text-gray-300">
                        Login
                    </a>

                    <a href="{{ route('register') }}" class="hover:text-gray-300">
                        Register
                    </a>
                @endauth

            </div>

        </div>
    </div>

</nav>