<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\Region;
use App\Models\Province;
use Livewire\Component;
use Livewire\WithPagination;
use SebastianBergmann\Environment\Console;
use Illuminate\Database\Eloquent\Model;

class LiveJobsList extends Component
{

    use WithPagination;

    public $buscar = "";
    public $perPage = 5;
    public $autonomias;
    public $autonomia;

    public $provincias;
    public $provincia;

    protected $queryString = ['buscar' => ['except' => '']];


    public function render()
    {
        if(!$this->autonomia and !$this->provincia) {
            $jobs = Job::paginate($this->perPage);
        }

        if ($this->autonomia and !$this->provincia) {
            $jobs = Job::autonomia($this->autonomia)->paginate($this->perPage);
        }

        if ($this->provincia) {
            $jobs = Job::provincia($this->provincia)->paginate($this->perPage);
        }

        if ($this->buscar != "") {
            $jobs = Job::where('title','like',"%{$this->buscar}%")
            ->autonomia($this->autonomia)
            ->provincia($this->provincia)
            ->paginate($this->perPage);
        }

        if(!$this->autonomias) {
            $this->autonomias = Region::all();
        }

        if($this->autonomia) {
            $this->provincias = Province::where('region_id',$this->autonomia)->get();
        }

        return view('livewire.live-jobs-list', [
            'jobs' => $jobs,
        ]);
    }

    public function updatingBuscar() {
        $this->resetPage();
    }

    public function updatingAutonomia() {
        $this->provincia = "";
    }


    public function clear() {
        $this->page = 1;
        $this->buscar = "";
        $this->perPage = 5;
        $this->autonomia ="";
        $this->provincia = "";
    }
    private function borrar() {
        if(!$this->autonomia and !$this->provincia) {
            $jobs = Job::paginate($this->perPage);
        }

        if ($this->autonomia and !$this->provincia) {
            $jobs = Job::autonomia($this->autonomia)->paginate($this->perPage);
        }

        if ($this->provincia) {
            $jobs = Job::provincia($this->provincia)->paginate($this->perPage);
        }

        if ($this->buscar != "") {
            $jobs = Job::where('title','like',"%{$this->buscar}%")
            ->paginate($this->perPage);
        }

        if(!$this->autonomias) {
            $this->autonomias = Region::all();
        }

        if($this->autonomia) {
            $this->provincias = Province::where('region_id',$this->autonomia)->get();
        }

        return view('livewire.live-jobs-list', [
            'jobs' => $jobs,
        ]);
    }
}
