<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\File_upload;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class File_UploadFactory extends Factory
{
   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_id' => $this->faker->unique()->numberBetween(1, 1000),
            'file_title' => $this->faker->name(),
            'file_name' => $this->faker->word . '.' . $this->faker->fileExtension, // Generates fake file names
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
