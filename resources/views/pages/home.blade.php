<section class="bg-[#F4F1EC] min-h-screen flex items-center">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <!-- Texto -->
        <div>
            <h1 class="text-5xl md:text-6xl font-serif text-[#111111] leading-tight mb-6">
                Auditoría & Asesoría
                <span class="block text-[#BFA36F]">
                    D. Bracamonte
                </span>
            </h1>

            <p class="text-lg text-[#6B6B6B] mb-8 max-w-xl">
                Firma especializada en auditoría financiera y consultoría estratégica,
                comprometida con la transparencia y la excelencia profesional.
            </p>

            <a href="#contacto"
               class="inline-block border border-[#BFA36F] text-[#111111] px-8 py-3 tracking-wide hover:bg-[#BFA36F] hover:text-white transition duration-300">
                Solicitar Consulta
            </a>
        </div>

        <!-- Imagen -->
        <div>
            @if($heroImage)
                <img src="{{ asset('storage/'.$heroImage->path) }}"
                     class="rounded-lg shadow-lg object-cover w-full h-[500px]">
            @else
                <div class="bg-white h-[500px] rounded-lg flex items-center justify-center text-[#6B6B6B]">
                    Imagen profesional
                </div>
            @endif
        </div>

    </div>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</section>