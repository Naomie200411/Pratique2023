@extends('base')
@section('title', 'LISTES DES MARCHES')
@section('content')

<div class="flex flex-wrap">
    @foreach($marches as $marche)
        <div class="relative w-1/3 p-4">
            <img src="{{ asset('storage/' . $marche->image) }}" alt="{{ $marche->nomMarche }}" class="w-full h-auto mb-4"> 
            <div class="mt-auto bg-white p-2 flex justify-between"> 
                <a href="{{ route('edit.marche', $marche->idMarche) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier</a>
                <form action="{{ route('delete.marche', $marche->idMarche) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                </form>
            </div>
            <div class="mt-2">
                <h3 class="text-lg font-bold">{{ $marche->nomMarche }}</h3>
                <p class="text-sm text-gray-600">Capacité: {{ $marche->capacite }} places</p>
            </div>
        </div>
    @endforeach
</div>

@endsection
