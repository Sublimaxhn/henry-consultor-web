@extends('layouts.app')

@section('title', 'Panel Admin')

@section('content')

<h2 class="text-xl font-semibold mt-12 mb-6">Imagen Principal (Hero)</h2>

@if(session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('hero.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-white p-6 rounded-xl shadow max-w-md">

    @csrf

    <input type="file"
           name="image"
           required
           class="w-full border border-gray-300 rounded-md p-3 mb-4">

    <button type="submit"
            class="w-full bg-[#0B1E3C] text-white py-3 rounded-md">
        Actualizar Imagen Principal
    </button>
</form>


@endsection
