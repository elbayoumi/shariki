<?php

namespace App\Observers;

use App\Models\MaleInterest;

class MaleInterestObserver
{
    /**
     * Handle the MaleInterest "created" event.
     */
    public function created(MaleInterest $maleInterest): void
    {
        //
    }

    /**
     * Handle the MaleInterest "updated" event.
     */
    public function updated(MaleInterest $maleInterest): void
    {
        //
    }

    /**
     * Handle the MaleInterest "deleted" event.
     */
    public function deleted(MaleInterest $maleInterest): void
    {
        //
    }

    /**
     * Handle the MaleInterest "restored" event.
     */
    public function restored(MaleInterest $maleInterest): void
    {
        //
    }

    /**
     * Handle the MaleInterest "force deleted" event.
     */
    public function forceDeleted(MaleInterest $maleInterest): void
    {
        //
    }
}
