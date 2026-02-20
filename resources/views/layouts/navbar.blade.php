<header class="border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">

        <a href="/" class="text-lg font-semibold text-[#0B1E3C]">
           Dwight Bracamonte
        </a>

        <div class="flex items-center gap-6">

            <a href="#servicios" class="text-sm text-gray-600 hover:text-[#0B1E3C]">
                Servicios
            </a>

            <a href="#contacto" class="text-sm text-gray-600 hover:text-[#0B1E3C]">
                Contacto
            </a>

            @guest
                <a href="{{ route('login') }}"
                   class="text-sm border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100 transition">
                    Login
                </a>
            @endguest

            @auth
                <a href="/admin"
                   class="text-sm bg-[#0B1E3C] text-white px-4 py-2 rounded-md">
                    Admin
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="text-sm text-gray-600 hover:text-red-600">
                        Salir
                    </button>
                </form>
            @endauth

        </div>

    </div>
</header>
