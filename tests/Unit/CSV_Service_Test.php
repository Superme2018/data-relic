<?php

namespace Tests\Unit;

use Tests\TestCase;

// CSV Service
use App\CORE_Systems\CSV_Service\Files;

class CSV_Service extends TestCase
{

    /** @test */
    public function create_upload_record()
    {
        // Need to use mocking here to create a file input object to be passed over to the class.
        //testcase::factory(Files::class, 3)->create();
        Files::factory()->count(3)->create();
    }

    /** @test */
    public function are_uploaded_files_available()
    {
        $this->assertCount(1, Files::getListOfFiles());
    }
}
