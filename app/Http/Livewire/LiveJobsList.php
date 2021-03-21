<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class LiveJobsList extends Component
{

    use WithPagination;

    public $buscar = "";
    public $perPage = 5;
    protected $queryString = ['buscar' => ['except' => '']];

    public function render()
    {
        return view('livewire.live-jobs-list', [
            'jobs' => Job::where('title','like',"%{$this->buscar}%")
            ->paginate($this->perPage),
        ]);
    }

    public function updatingBuscar() {
        $this->resetPage();

    }
    public function clear() {
        $this->page = 1;
        $this->buscar = "";
        $this->perPage = 5;
    }
}
