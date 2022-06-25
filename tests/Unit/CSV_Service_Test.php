<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

// CSV Service
use App\CORE_Systems\CSV_Service\Files;

class CSV_Service extends TestCase
{
    //
    public function test_are_uploaded_files_available()
    {
        // The expected count, hmmmm, what if its more.
        $this->assertCount(1, Files::getListOfFiles());
    }
}
