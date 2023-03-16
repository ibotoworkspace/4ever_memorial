<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(TemplateSeeder::class);
        $this->call(Template2Seeder::class);
        $this->call(Template3Seeder::class);
        $this->call(Template4Seeder::class);

    }
}
