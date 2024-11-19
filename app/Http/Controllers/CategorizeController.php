<?php

namespace App\Http\Controllers;

use App\Events\CategoryCsvUploaded;
use App\Http\Requests\CsvUploadRequest;

class CategorizeController extends Controller
{
    public function upload(CsvUploadRequest $request)
    {
        /** @var string $path */
        $path = $request->file('csv_file')->store('csv_files');
        // Broadcast event CategoryCsvUploaded
        event(new CategoryCsvUploaded($path));
        return response()->json(['path'=>$path,'message' => 'File uploaded successfully']);
    }
}
