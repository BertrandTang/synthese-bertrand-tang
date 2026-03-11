<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Animal;

class IndexController extends Controller
{
    public function index(): View
    {
        $animals = Animal::all();

        return view('welcome', [
            'animals' => $animals,
        ]);
    }
}

