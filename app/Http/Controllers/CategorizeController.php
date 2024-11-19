<?php

namespace App\Http\Controllers;

use App\Http\Requests\CsvUploadRequest;

class CategorizeController extends Controller
{
    public function upload(CsvUploadRequest $request)
    {
        $path = $request->file('csv_file')->store('csv_files');

        return response()->json(['path' => $path, 'message' => 'File uploaded successfully']);
    }
}
