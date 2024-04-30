@extends('base')
@section('title', 'ENREGISTREMENT DES MARCHES')

@section('content')
<div class="flex justify-center items-center h-full">
    <form method="POST" action="{{ route('marche.store') }}" class="w-full max-w-lg bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
        <h2 class="text-2xl mb-4 text-center font-bold">Remplissez le formulaire suivant:</h2>
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="nomMarche" class="block text-gray-700 text-sm font-bold mb-2">Nom :</label>
                <input type="text" name="nomMarche" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomMarche" placeholder="Nom du marché">
                @error('nomMarche')
                    <span class="text-red-800">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description :</label>
                <textarea type="text" name="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="description" placeholder="Description du marché"></textarea>
                @error('description')
                    <span class="text-red-800">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="capacite" class="block text-gray-700 text-sm font-bold mb-2">Capacité :</label>
                <input type="int" name="capacite" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="capacite" placeholder="Capacité du marché">
                @error('capacite')
                    <span class="text-red-800">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="adresse" class="block text-gray-700 text-sm font-bold mb-2">Adresse :</label>
                <input type="text" name="adresse" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="adresse" placeholder="Adresse">
                @error('adresse')
                    <span class="text-red-800">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="telephone" class="block text-gray-700 text-sm font-bold mb-2">Téléphone :</label>
                <input type="text" name="telephone" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="telephone" placeholder="Téléphone">
                @error('telephone')
                    <span class="text-red-800">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 flex items-center">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image :</label>
                <input type="file" name="image" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="image" accept="image/*">
                @error('image')
                    <span class="text-red-800">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Ajouter
            </button>
        </div>
    </form>
</div>
@endsection
