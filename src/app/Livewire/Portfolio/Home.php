<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;
use App\Models\Project;

class Home extends Component
{
    public $projects;

    public function mount()
    {
        $this->projects = Project::latest()->get();
    }

    public function render()
    {
        return view('livewire.portfolio.home');
    }
}