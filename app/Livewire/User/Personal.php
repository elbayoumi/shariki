<?php

namespace App\Livewire\User;

use Livewire\Component;

class Personal extends Component
{
    public $marriage_terms;
    public $personal_status_law;
    public $marital_rights;
    public $bear_marital_responsibility;

    public function submitForm()
    {
        if ($this->marriage_terms == 'yes' &&
            $this->personal_status_law == 'yes' &&
            $this->marital_rights == 'yes' &&
            $this->bear_marital_responsibility == 'yes' )
        {
            return redirect()->route('dashboard.match.step1');
        }
    }

    public function resetForm()
    {
        $this->marriage_terms = null;
        $this->personal_status_law = null;
        $this->marital_rights = null;
        $this->bear_marital_responsibility = null;
    }

    public function render()
    {
        return view('livewire.user.personal');
    }
}
