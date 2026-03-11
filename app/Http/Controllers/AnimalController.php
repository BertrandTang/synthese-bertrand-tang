<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function show($id)
    {
        $animals = Animal::findOrFail($id);

        return view('pages.animal-details', ['animal' => $animals]);
    }

public function create()
    {
        Animal::create([
            'name' => 'Coquillette',
            'species' => 'Chien',
            'age' => 3,
            'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu\'elle aime.',
            'img' => '/img/coquillette.png',
        ]);

        return redirect()->route('home');
    }

    public function update($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update(['name' => $animal->name . ' modifié']);

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('home');
    }
}
