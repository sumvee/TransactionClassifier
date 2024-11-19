<?php

namespace App\Listeners;

use App\Events\CategoryCsvUploaded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ParseCsvCategory
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CategoryCsvUploaded $event): void
    {
        //
    }
}
