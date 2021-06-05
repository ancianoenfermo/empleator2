<?php

namespace App\Http\Livewire;
use App\Models\Job;
use App\View\Components\selectSearch;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEmpleos extends Component
{
    use WithPagination;
    public $search;


    public function render()
    {

        $jobs = Job::where('title','like', '%' . $this->search . '%' )
        ->orwhere('excerpt','like', '%' . $this->search . '%' )
        ->paginate(5);
        return view('livewire.show-empleos',compact('jobs'));
    }

    public function updatingSearch() {
        $this->resetPage();
    }
}
