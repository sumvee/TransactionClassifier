<?php

namespace App\Listeners;

use App\Events\CategoryCsvUploaded;
use App\Services\ClassifyCategory;
use App\Services\CSVParse;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ParseCsvCategory
{
    private CSVParse $parser;
    /**
     * Create the event listener.
     */
    public function __construct(CsvParse $parser)
    {
        $this->parser = $parser;
    }

    /**
     * Handle the event.
     * @throws BindingResolutionException
     */
    public function handle(CategoryCsvUploaded $event): void
    {
        $categories = $this->parser->parse($event->path);
        $classifications=[];
        foreach ($categories as $category) {
            /** @var ClassifyCategory $classify */
            $classify = app()->makeWith(ClassifyCategory::class, ['category' => $category]);
            if(config('classify.use_ml') === 'true') {
                $classifications[$category] = $classify->classifyML();
            } else {
                $classifications[$category] = $classify->classify();
            }
        }


    }
}
