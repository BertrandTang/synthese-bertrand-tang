<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Animal extends Component
{
    public int $id;
    public string $name;
    public string $description;
    public string $img;
    public string $species;
    public int $age;

    /**
     * Create a new component instance.
     */
    public function __construct(int $id, string $name, string $description, string $img, string $species, int $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->img = $img;
        $this->species = $species;
        $this->age = $age;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.animal');
    }
}
