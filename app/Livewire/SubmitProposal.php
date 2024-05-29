<?php

namespace App\Livewire;

use Livewire\Component;

class SubmitProposal extends Component
{
    public bool $firstView = true;
    public bool $secondView = false;
    public bool $thirdView = false;
    public bool $finalView = false;

    public array $q1Needs = [];

    public function render()
    {
        return view('livewire.submit-proposal');
    }

    public function secondView()
    {
        $this->firstView = false;
        $this->secondView = true;
    }

    public function save()
    {
        dd($this->all());
    }
}
