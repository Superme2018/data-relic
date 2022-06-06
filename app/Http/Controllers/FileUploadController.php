<?php

namespace App\Http\Controllers;

// Core Systems
use App\CORE_Systems\CSV\Upload;
use App\CORE_Systems\CSV\Uncompress;

// Framework
use Illuminate\Http\Request;

// Requests
use App\Http\Requests\StoreZipFileRequest;

// Models
use App\Models\CsvFile;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('images.index');
    }

    public function getFiles()
    {
        // return a list of uploaded files.
    }

    // Store and decompress a zipped (*compressed) .CSV file.
    public function uploadFile(StoreZipFileRequest $request)
    {

        // Check validator exits.
        if (!isset($request->validator))
        {
            return response()->json(['error' => 'Failed to execute the validation process.'], 400);
        }

        // Check that the validation passed.
        if ($request->validator->fails())
        {
            return response()->json($request->validator->getMessageBag()->getMessages(), 400);
        }

        // Store the file to the HDD and catch the $path.
        if(!$path = $request->file('file')->store('files/csv_files/zipped'))
        {
            return response()->json(['error' => 'File did not save to server storage.'], 400);
        }

        // Construct a file request object, to be used for parameter access.
        $uploadedFile = $request->file('file');

        // Decompress and check the file is a .csv here.
        // ....

        $csvFile = CsvFile::create([
            'name' => $uploadedFile->hashName(),
            'extension' => $uploadedFile->extension(),
            'size' => $uploadedFile->getSize()
        ]);

        return $csvFile; // Not sure this is required, but used for debugging for the time being.

    }
}
