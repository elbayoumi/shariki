<?php

namespace App\Observers;

use App\Models\FemaleInterest;

class FemaleInterestObserver
{
    /**
     * Handle the FemaleInterest "created" event.
     */
    public function created(FemaleInterest $femaleInterest): void
    {
        //
    }

    /**
     * Handle the FemaleInterest "updated" event.
     */
    public function updated(FemaleInterest $femaleInterest): void
    {
        //
    }

    /**
     * Handle the FemaleInterest "deleted" event.
     */
    public function deleted(FemaleInterest $femaleInterest): void
    {
        //
    }

    /**
     * Handle the FemaleInterest "restored" event.
     */
    public function restored(FemaleInterest $femaleInterest): void
    {
        //
    }

    /**
     * Handle the FemaleInterest "force deleted" event.
     */
    public function forceDeleted(FemaleInterest $femaleInterest): void
    {
        //
    }
}
