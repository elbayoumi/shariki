<?php

namespace App\Livewire\User;

use Livewire\Component;

class Step1 extends Component
{
    public $gender;
    public $wife;

    public function submitForm()
    {
        if($this->gender == 'female')
        {

            return redirect()->route('dashboard.female.index');

        }elseif ($this->gender == 'male' && $this->wife && in_array($this->wife, ['first', 'second', 'third', 'fourth']))
        {

            return redirect()->route('dashboard.male.index',['wife'=>$this->wife]);

        }

    }

    public function render()
    {
        return view('livewire.user.step1');
    }
}
