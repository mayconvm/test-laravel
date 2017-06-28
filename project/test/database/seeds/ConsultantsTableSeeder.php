<?php

use Illuminate\Database\Seeder;

class ConsultantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('consultants')->delete();

        App\Consultant::create(array('idconsultants' => 1, 'avatar' => 'https://randomuser.me/api/portraits/women/85.jpg', 'name' => 'Roosevelt M. Aaron', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Consultant::create(array('idconsultants' => 2, 'avatar' => 'https://randomuser.me/api/portraits/women/84.jpg', 'name' => 'James A. Cabrera', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Consultant::create(array('idconsultants' => 3, 'avatar' => 'https://randomuser.me/api/portraits/women/83.jpg', 'name' => 'Rodolfo R. Davis', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Consultant::create(array('idconsultants' => 4, 'avatar' => 'https://randomuser.me/api/portraits/women/82.jpg', 'name' => 'Don A. Gay', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));

        App\Consultant::create(array('idconsultants' => 5, 'avatar' => 'https://randomuser.me/api/portraits/women/81.jpg', 'name' => 'Vincent L. Ralph', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Consultant::create(array('idconsultants' => 6, 'avatar' => 'https://randomuser.me/api/portraits/women/80.jpg', 'name' => 'Christina C. Nelson', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Consultant::create(array('idconsultants' => 7, 'avatar' => 'https://randomuser.me/api/portraits/women/86.jpg', 'name' => 'Marielle R. Fielding', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Consultant::create(array('idconsultants' => 8, 'avatar' => 'https://randomuser.me/api/portraits/women/87.jpg', 'name' => 'Rebekah J. Martin', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Consultant::create(array('idconsultants' => 9, 'avatar' => 'https://randomuser.me/api/portraits/women/88.jpg', 'name' => 'Sallie T. Bronk', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));
        App\Consultant::create(array('idconsultants' => 10, 'avatar' => 'https://randomuser.me/api/portraits/women/89.jpg', 'name' => 'Anita J. Cervantes', 'created_at' => '2017-06-21', 'updated_at' => '2017-06-21'));

    }
}
