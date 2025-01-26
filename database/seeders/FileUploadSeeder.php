<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\File_upload;
class FileUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        File_upload::factory()->count(10)->create();
    }
}
