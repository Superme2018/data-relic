<?php

namespace Database\Factories;

// Models
use App\Models\CsvFile;

// Framework
use Illuminate\Database\Eloquent\Factories\Factory;

class CsvFileFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CsvFile::class;

    /**
     * Define the model's default state.
     *
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name(),
            'extension' => '.zip',
            'size' => '100'
        ];

    }
}
