<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarcheRequest;
use Illuminate\Http\Request;
use App\Models\Marche;
use Illuminate\Support\Facades\Storage;


class MarcheController extends Controller
{
    public function index()
    {
        $marche = Marche::all();
        return view('index',['marches' => $marche ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MarcheRequest $request)
    {
        // Valider les données
        $validatedData = $request->validated();

        $filename = time().'.' . $request->image->extension();
        $path= $request->file('image')->storeAs(
            'avatars',
            $filename,
            'public'
        );
         
       //$name = Storage::disk('local')->put('images', $validatedData->file('image'));
       
        

        //$imagePath = $request->file('image')->store('images', 'public');

        $marche = new Marche;
        $marche->nomMarche = $validatedData['nomMarche'];
        $marche->description = $validatedData['description'];
        $marche->capacite = $validatedData['capacite'];
        $marche->telephone = $validatedData['telephone'];
        $marche->adresse = $validatedData['adresse'];
        $marche->image = $path;


        
        // Enregistrer l'etudiant'
        $marche->save();

            return to_route('marche.index');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $marche = Marche::findOrFail($id);
        return view('edit-marche', compact('marche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MarcheRequest $request, $id)
    {
        $marche = Marche::findOrFail($id);
        
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $filename = time().'.'.$request->image->extension();
            $path = $request->file('image')->storeAs('avatars', $filename, 'public');
            $marche->image = $path;
        }

        $marche->nomMarche = $validatedData['nomMarche'];
        $marche->description = $validatedData['description'];
        $marche->capacite = $validatedData['capacite'];
        $marche->adresse = $validatedData['adresse'];
        $marche->telephone = $validatedData['telephone'];

        $marche->save();

        return redirect()->route('marche.index')->with('success', 'Marché mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $marche = Marche::findOrFail($id);
        $marche->delete();
        return redirect()->route('marche.index')->with('success', 'Marché supprimé avec succès!');
    }
}
