<?php

namespace App\Http\Livewire;

use App\Models\Autonomia;
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


    public $perPage = 5;
    public $autonomias;
    public $autonomia;


    public $provincias;
    public $provincia;




    public function render()
    {
        if(!$this->autonomias){
            $this->autonomias = Autonomia::all();
        }


        if($this->autonomia) {
            $jobs = Job::orderBy('datePosted', 'desc')->where('autonomia_id',$this->autonomia)->paginate($this->perPage);
            return view('livewire.live-jobs-list', [
                'jobs' => $jobs,
            ]);
        }

        if(!$this->autonomia and !$this->provincia){

            $jobs = Job::orderBy('datePosted', 'desc')->paginate($this->perPage);
            return view('livewire.live-jobs-list', [
                'jobs' => $jobs,
            ]);
        }




    }

    public function updating($value, $name)
    {

    }


    public function clear() {
        $this->page = 1;

        $this->perPage = 5;
        $this->autonomia ="";
        $this->provincia = "";

    }
}
