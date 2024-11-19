<?php

namespace App\Services;

class ClassifyCategory
{
    public string $category;
    
    public function __construct(string $category)
    {
        $this->category = $category;
    }

    public function classify(): string
    {
        if (in_array($this->category, ['Electronics', 'Clothing', 'Home'])) {
            return 'Category: ' . $this->category;
        }
        return 'Category: Other';
    }

    public function classifyML(): string
    {
        // Machine learning code here
        return 'Category: ' . $this->category;
    }


}
