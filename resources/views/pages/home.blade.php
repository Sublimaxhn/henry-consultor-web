@extends('layouts.app')

@section('title', 'Firma de Auditoría')

@section('content')

<!-- HERO INSTITUCIONAL -->
<section class="bg-[#0B1E3C] text-white py-32">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h1 class="text-4xl md:text-4xl font-bold leading-tight">
            AUDITORIA Y ASESORIA D. BRACAMONTE, S. DE R. L.
        </h1>

        <p class="mt-6 text-lg text-gray-300 max-w-2xl mx-auto">
            Brindamos servicios profesionales de auditoría, cumplimiento normativo
            y consultoría estratégica para empresas que buscan crecimiento sostenible.
        </p>

        <div class="mt-10">
            <a href="#contacto"
               class="bg-white text-[#0B1E3C] px-8 py-3 rounded-md font-semibold
                      hover:bg-gray-100 transition">
                Solicitar Consulta
            </a>
        </div>

    </div>
</section>

<!-- SERVICIOS -->
<section id="servicios" class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-[#0B1E3C]">
                Nuestros Servicios
            </h2>
            <p class="mt-4 text-gray-600">
                Soluciones profesionales adaptadas a su organización.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">

            <div class="p-8 border rounded-xl hover:shadow-lg transition">
                <h3 class="font-semibold text-lg text-[#0B1E3C]">
                    Auditoría Externa
                </h3>
                <p class="mt-4 text-gray-600 text-sm">
                    Evaluación independiente de estados financieros bajo normas vigentes.
                </p>
            </div>

            <div class="p-8 border rounded-xl hover:shadow-lg transition">
                <h3 class="font-semibold text-lg text-[#0B1E3C]">
                    Auditoría Interna
                </h3>
                <p class="mt-4 text-gray-600 text-sm">
                    Análisis de procesos y controles internos para mejorar eficiencia.
                </p>
            </div>

            <div class="p-8 border rounded-xl hover:shadow-lg transition">
                <h3 class="font-semibold text-lg text-[#0B1E3C]">
                    Consultoría Financiera
                </h3>
                <p class="mt-4 text-gray-600 text-sm">
                    Estrategias financieras y tecnológicas orientadas al crecimiento empresarial.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- SOBRE LA FIRMA -->
<section class="py-24 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <div>
            <h2 class="text-3xl font-bold text-[#0B1E3C]">
                Sobre Nuestra Firma
            </h2>

            <p class="mt-6 text-gray-600 leading-relaxed">
                Somos una firma especializada en auditoría y consultoría financiera,
                comprometida con la transparencia, la ética profesional y el cumplimiento normativo.
            </p>

            <p class="mt-4 text-gray-600 leading-relaxed">
                Nuestro equipo combina experiencia técnica con innovación tecnológica
                para brindar soluciones integrales a nuestros clientes.
            </p>
        </div>

    @if(isset($heroImage) && $heroImage)
    <img src="{{ asset('storage/' . $heroImage->path) }}"
         alt="Firma Auditora"
         class="rounded-xl shadow-2xl w-full object-cover">
@else
    <div class="bg-gray-200 h-[300px] rounded-xl flex items-center justify-center text-gray-400">
        Imagen no cargada
    </div>
@endif



    </div>
</section>

<!-- VALORES -->
<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold text-[#0B1E3C] mb-16">
            Nuestros Valores
        </h2>

        <div class="grid md:grid-cols-4 gap-10">

            <div>
                <h4 class="font-semibold text-[#0B1E3C]">Ética</h4>
                <p class="text-gray-600 text-sm mt-2">
                    Actuamos con integridad y transparencia.
                </p>
            </div>

            <div>
                <h4 class="font-semibold text-[#0B1E3C]">Compromiso</h4>
                <p class="text-gray-600 text-sm mt-2">
                    Nos enfocamos en resultados reales.
                </p>
            </div>

            <div>
                <h4 class="font-semibold text-[#0B1E3C]">Excelencia</h4>
                <p class="text-gray-600 text-sm mt-2">
                    Buscamos calidad en cada proceso.
                </p>
            </div>

            <div>
                <h4 class="font-semibold text-[#0B1E3C]">Confianza</h4>
                <p class="text-gray-600 text-sm mt-2">
                    Construimos relaciones duraderas.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- CTA FINAL -->
<section class="bg-[#0B1E3C] text-white py-20 text-center">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-3xl font-bold">
            ¿Necesita asesoría profesional?
        </h2>

        <p class="mt-6 text-gray-300">
            Estamos listos para apoyar el crecimiento y cumplimiento de su empresa.
        </p>

        <div class="mt-8">
            <a href="#contacto"
               class="bg-white text-[#0B1E3C] px-8 py-3 rounded-md font-semibold">
                Contáctenos
            </a>
        </div>

    </div>
</section>

<!-- CONTACTO -->
<section id="contacto" class="py-24 bg-white">
    <div class="max-w-4xl mx-auto px-6 text-center">

        <h2 class="text-3xl font-bold text-[#0B1E3C]">
            Contacto
        </h2>

        <p class="mt-6 text-gray-600">
            Escríbanos para una consulta personalizada.
        </p>

        <div class="mt-8 text-gray-700">
            <p>Email: auditoriabracamonte@yahoo.es</p>
            <p>Teléfono: +504 9747-2623</p>
        </div>

    </div>
</section>

@endsection
