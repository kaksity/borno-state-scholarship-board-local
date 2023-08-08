<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LgaSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(QualificationTypeSeeder::class);
        $this->call(DocumentTypeSeeder::class);
    }
}