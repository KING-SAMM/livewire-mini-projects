<?php

namespace App\Http\Livewire;

use Countable;
use App\Models\Country;
use Livewire\Component;
use App\Models\Continent;

class CascadingDropdown extends Component
{
    public Countable | iterable $countries = [];
    public Countable | iterable $continents = [];
    public string $selectedCountry;
    public string $selectedContinent;

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function changeContinent()
    {
        if($this->selectedContinent !== '-1')
        {
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }
    }
}
