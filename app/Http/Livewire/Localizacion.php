<?php

namespace App\Http\Livewire;
use App\Models\Region;
use App\Models\Province;
use Livewire\Component;

class Localizacion extends Component
{
    public $autonomia;
    public $provincias = [];
    public $provincia;

    public function render()
    {
        if(!empty($this->autonomia)){
            $this->provincias = Province::where('region_id',$this->autonomia)->get();
        }

        $autonomias = Region::orderBy('name')->get();
        return view('livewire.localizacion')->with([
            "autonomias" => $autonomias,
        ]);
    }
    public function updatedAutonomia() {
            if ($this->autonomia == "") {
                $this->provincias = [];
                $this->provincia = "";
            }
    }

}
