<nav class="bg-white border-b shadow-sm mb-6">

    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-16">

            <div class="flex items-center gap-10">

                <a href="{{ route('homepage') }}" class="text-xl font-bold">
                    Presto
                </a>

                <a href="{{ route('homepage') }}" class="hover:underline">
                    Annunci
                </a>

                <div class="relative group">
                    <button class="hover:underline">
                        Categorie
                    </button>

                    <div class="absolute left-0 mt-2 w-48 bg-white border rounded shadow hidden group-hover:block">

                       

                    </div>
                </div>

            </div>

            <div class="flex items-center gap-6">

                @auth
                    <a href="{{ route('article.create') }}" 
                       class="bg-black text-white px-4 py-2 rounded">
                        Inserisci
                    </a>

                    <span>
                        {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-red-500">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}">
                        Login
                    </a>

                    <a href="{{ route('register') }}">
                        Register
                    </a>
                @endauth

            </div>

        </div>
    </div>

</nav>