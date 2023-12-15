<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sheet;
use Database\Factories\SheetFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SheetsTableSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sheet::factory()->count(10)->create();
    }
}
