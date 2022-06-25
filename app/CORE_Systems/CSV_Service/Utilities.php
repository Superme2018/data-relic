<?php

namespace App\CORE_Systems\CSV_Service;

// Models
use App\Models\CsvFile;

class Utilities
{

    public static function storeCsvFile($uploadedFile)
    {
        return CsvFile::create([
            'name' => $uploadedFile->hashName(),
            'extension' => $uploadedFile->extension(),
            'size' => $uploadedFile->getSize()
        ]);
    }

}
