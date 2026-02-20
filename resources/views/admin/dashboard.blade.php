@extends('layouts.app')

@section('title', 'Dwight Bracamonte')

@section('content')

<section class="bg-white pt-28 pb-24">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-14 items-center">

        <!-- Texto -->
        <div class="text-center md:text-left">

            <p class="text-xs sm:text-sm tracking-[0.2em] uppercase text-gray-400 mb-5">
                Auditoría • Automatización • Tecnología
            </p>

            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-[#0B1E3C] leading-tight">
                Consultor Financiero <br class="hidden md:block">
                & Tecnológico
            </h1>

            <p class="mt-6 text-base sm:text-lg text-gray-600 max-w-xl mx-auto md:mx-0 leading-relaxed">
                Ayudo a empresas a optimizar sus procesos financieros mediante
                auditoría estratégica y soluciones tecnológicas personalizadas,
                enfocadas en eficiencia, control y crecimiento sostenible.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">

                <a href="#contacto"
                   class="bg-[#0B1E3C] text-white px-8 py-3 rounded-md shadow-md 
                          hover:-translate-y-0.5 hover:shadow-lg 
                          transition duration-300 text-center">
                    Solicitar asesoría
                </a>

                <a href="#servicios"
                   class="border border-gray-300 text-gray-700 px-8 py-3 rounded-md 
                          hover:bg-gray-100 transition duration-300 text-center">
                    Ver servicios
                </a>

            </div>
        </div>

        <!-- Imagen -->
        <div class="hidden md:flex justify-center">
            @if($profileImage)
                <img src="{{ asset('storage/'.$profileImage->path) }}"
                     alt="Dwight Bracamonte"
                     class="h-[360px] md:h-[420px] w-full object-cover rounded-xl shadow-xl">
            @else
                <div class="bg-[#F5F7FA] h-[360px] md:h-[420px] w-full rounded-xl 
                            flex items-center justify-center text-gray-400">
                    Sin imagen cargada
                </div>
            @endif
        </div>

    </div>
</section>

@endsection
