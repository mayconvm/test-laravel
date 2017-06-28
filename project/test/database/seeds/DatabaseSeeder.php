<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ResetDataTableSeeder::class);
        $this->call(AddressTableSeeder::class);
        $this->call(ConsultantsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
    }
}
