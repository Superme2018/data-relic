<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\CsvFile;

class ImageController extends Controller
{
    public function index()
    {
        return view('images.index');
    }

    public function show()
    {
        // return all images
    }

    public function store(Request $request)
    {
        // Check the response.
        if(!$request->hasFile('image'))
        {
            return response()->json(['error' => 'There is no image present.'], 400);
        }

        // Validate the request.
        $request->validate([
            'image' => 'required|file|image|'
        ]);

        // Store the file and catch the $path.
        if(!$path = $request->file('image')->store('public/images'))
        {
            return response()->json(['error' => 'File did not save to server storage.'], 400);
        }

        $uploadedFile = $request->file('image');

        $image = CsvFile::create([
            'name' => $uploadedFile->hashName(),
            'extension' => $uploadedFile->extension(),
            'size' => $uploadedFile->getSize()
        ]);

        return $image;

    }
}
