@extends('layouts.app')

@section('title', 'Subir Imagen')

@section('content')

<div class="max-w-xl mx-auto py-20">

    <h2 class="text-2xl font-semibold mb-6">Subir Imagen de Perfil</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('image.store') }}" 
          method="POST" 
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf

        <input type="file" 
               name="image" 
               required
               class="border p-2 w-full">

        <button type="submit"
                class="bg-[#0B1E3C] text-white px-6 py-2 rounded-md">
            Subir Imagen
        </button>

    </form>

</div>

@endsection
