<?php

namespace App\Livewire\User\Male;

use Livewire\Component;

class Start extends Component
{
    public $step = 1;
    public $first_name;
    public $father_name;
    public $grandfather_name;
    public $tribe;
    public $mobile;
    public $dob;
    public $pob_country;
    public $pob_city;
    public $address_country;
    public $address_city;

    public function submitName()
    {
        $this->validate(
                [
                'first_name'=>'required|min:3|max:255',
                'father_name'=>'required|min:3|max:255',
                'grandfather_name'=>'required|min:3|max:255',
                'tribe'=>'required|min:3|max:255',
                ]
        );

        $this->step++;
    }

    public function submitMobile()
    {
        $this->validate(
                [
                'mobile'=>'required|min:8|max:10',
                ]
        );

        $this->step++;
    }

    public function submitBilling()
    {
        $this->validate(
                [
                'dob'=>'required|date',
                'pob_city'=>'required|min:3|max:255',
                'pob_country'=>'required|min:3|max:255',
                'address_country'=>'required|min:3|max:255',
                'address_city'=>'required|min:3|max:255',
                ]
        );

        $this->step++;
    }

    public function render()
    {
        return view('livewire.user.male.start');
    }
}
