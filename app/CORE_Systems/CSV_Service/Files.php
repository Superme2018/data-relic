<?php

namespace App\CORE_Systems\CSV_Service;

// Models
use App\Models\CsvFile;

// Utilities
use App\CORE_Systems\CSV_Service\Utilities as CSVServiceUtilities;

class Files
{

    // Create a file record.
    public static function createFileRecord($uploadedFile)
    {
        if(!$csvFile = CSVServiceUtilities::storeCsvFile($uploadedFile))
        {
            return false;
        }

        return $csvFile;
    }

    // Gets a list of the files, that have been uploaded.
    public static function getListOfFiles()
    {

        if(!CsvFile::count())
        {
            return false;
        }

        return CsvFile::all();
    }

}
