<?php

namespace App\Services;

class CSVParse
{
    /**
     * Parse the CSV file
     * @todo Add exceptions
     * @param string $path
     * @return array
     */
    public function parse(string $path): array
    {
        $file = fopen(storage_path('app/private/' . $path), 'r');
        $data = [];
        while (($line = fgetcsv($file)) !== false) {
            if ($line[0] === 'Status') {
                continue;
            }
            $name = $line[2];
            if(in_array($name, $data, true)) {
                continue;
            }
            $data[] = $name;
        }
        return $data;
    }

}
