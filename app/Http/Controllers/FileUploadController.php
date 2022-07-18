<?php

namespace App\Http\Controllers;

// Core Systems
use App\CORE_Systems\CSV_Service\CsvFilesService;

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

    public function getListOfFiles()
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

        // Construct a file request object, from the file input.
        if(!$uploadedFile = $request->file('file'))
        {
            return response()->json(['error' => 'No file supplied.'], 400);
        }

        // Decompress and check the file is a .csv here.
        // ....

        // Hmmm, should one depend on the test to check for this ot also handle the issue if hit at runtime.
        if(!$csvFile = CsvFilesService::createFileRecord($uploadedFile))
        {
            return response()->json(['error' => 'Failed to create a file record.'], 400);
        }

        return $csvFile; // Not sure this is required, but used for debugging for the time being.

    }
}
