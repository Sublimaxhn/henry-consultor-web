<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Dwight Bracamonte</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#0B1E3C] to-[#142E57]">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-10">

        {{-- Marca --}}
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-[#0B1E3C]">
                Dwight Bracamonte
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Panel Administrativo
            </p>
        </div>

        {{-- Status --}}
        @if(session('status'))
            <div class="mb-4 text-sm text-green-600 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            {{-- Email --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Correo electrónico
                </label>
                <input 
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="mt-1 w-full rounded-lg border-gray-300 focus:border-[#0B1E3C] focus:ring-[#0B1E3C] shadow-sm"
                >
                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Contraseña
                </label>
                <input 
                    type="password"
                    name="password"
                    required
                    class="mt-1 w-full rounded-lg border-gray-300 focus:border-[#0B1E3C] focus:ring-[#0B1E3C] shadow-sm"
                >
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember --}}
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" name="remember" 
                           class="rounded border-gray-300 text-[#0B1E3C] focus:ring-[#0B1E3C]">
                    Recordarme
                </label>

                <a href="{{ route('password.request') }}" 
                   class="text-[#0B1E3C] hover:underline">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>

            {{-- Botón --}}
            <div>
                <button type="submit"
                    class="w-full bg-[#0B1E3C] text-white py-3 rounded-lg font-medium 
                           hover:-translate-y-0.5 hover:shadow-xl transition duration-300 shadow-md">
                    Iniciar Sesión
                </button>
            </div>
        </form>

        {{-- Footer --}}
        <div class="text-center text-xs text-gray-400 mt-8">
            © {{ date('Y') }} Dwight Bracamonte — Consultor Financiero & Tecnológico
        </div>

    </div>

</body>
</html>
