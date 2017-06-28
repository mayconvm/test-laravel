<?php

use Illuminate\Database\Seeder;

class ResetDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();
        DB::table('consultants')->delete();
		DB::table('addresses')->delete();

        App\Address::create(array ('idaddresses' => 1, 'street' => 'Amesbury Drive', 'number' => 208, 'neighborhood' => 'Johnsonville', 'city' => 'Wellington', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Address::create(array ('idaddresses' => 2, 'street' => ' Harrison Street', 'number' => 2307, 'neighborhood' => 'Johnsonville', 'city' => 'Wellington', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Address::create(array ('idaddresses' => 3, 'street' => ' Tree Frog Lane', 'number' => 675, 'neighborhood' => 'LORETTO', 'city' => 'Minnesota', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Address::create(array ('idaddresses' => 4, 'street' => ' Ashwood Drive', 'number' => 1611, 'neighborhood' => 'MARYVILLE', 'city' => 'Illinois', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Address::create(array ('idaddresses' => 5, 'street' => 'Amesbury', 'number' => 208, 'neighborhood' => 'LORETTO', 'city' => 'Minnesota', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Address::create(array ('idaddresses' => 6, 'street' => ' Camel Back Road', 'number' => 319, 'neighborhood' => 'Henryetta', 'city' => 'Oklahoma', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Address::create(array ('idaddresses' => 7, 'street' => 'Amesbury', 'number' => 208, 'neighborhood' => 'Johnsonville', 'city' => 'Wellington', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Address::create(array ('idaddresses' => 8, 'street' => 'Amesbury', 'number' => 208, 'neighborhood' => 'Johnsonville', 'city' => 'Wellington', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Address::create(array ('idaddresses' => 9, 'street' => 'Amesbury', 'number' => 208, 'neighborhood' => 'Johnsonville', 'city' => 'Wellington', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Address::create(array ('idaddresses' => 10, 'street' => 'Amesbury', 'number' => 208, 'neighborhood' => 'Johnsonville', 'city' => 'Wellington', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
    }
}
