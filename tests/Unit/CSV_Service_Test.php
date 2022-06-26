<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

// CSV Service
use App\CORE_Systems\CSV_Service\Files;

class CSV_Service extends TestCase
{
    /** @test */
    public function are_uploaded_files_available()
    {
        $this->assertCount(1, Files::getListOfFiles());
    }
}
