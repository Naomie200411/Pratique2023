@extends('base')
@section('title', 'Modifier un marché')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Modifier le marché</h2>
    <form method="POST" action="{{ route('update.marche', $marche->idMarche) }}" class="max-w-md mx-auto" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nomMarche" class="block text-gray-700 text-sm font-bold mb-2">Nom :</label>
            <input type="text" name="nomMarche" class="form-input w-full" id="nomMarche" value="{{ $marche->nomMarche }}" placeholder="Nom du marché">
            @error('nomMarche')
                <span class="text-red-800">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description :</label>
            <textarea name="description" class="form-textarea w-full" id="description" placeholder="Description du marché">{{ $marche->description }}</textarea>
            @error('description')
                <span class="text-red-800">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="capacite" class="block text-gray-700 text-sm font-bold mb-2">Capacité :</label>
            <input type="int" name="capacite" class="form-input w-full" id="capacite" value="{{ $marche->capacite }}" placeholder="Capacité du marché">
            @error('capacite')
                <span class="text-red-800">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="adresse" class="block text-gray-700 text-sm font-bold mb-2">Adresse :</label>
            <input type="text" name="adresse" class="form-input w-full" id="adresse" value="{{ $marche->adresse }}" placeholder="Adresse">
            @error('adresse')
                <span class="text-red-800">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="telephone" class="block text-gray-700 text-sm font-bold mb-2">Téléphone :</label>
            <input type="text" name="telephone" class="form-input w-full" id="telephone" value="{{ $marche->telephone }}" placeholder="Téléphone">
            @error('telephone')
                <span class="text-red-800">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image :</label>
            <input type="file" name="image" class="form-input w-full" id="image" accept="image/*">
            @error('image')
                <span class="text-red-800">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enregistrer les modifications</button>
        </div>
    </form>
</div>
@endsection
