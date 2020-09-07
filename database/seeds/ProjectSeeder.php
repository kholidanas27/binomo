<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 40; $i++){

    		DB::table('project')->insert([
    		// 'mulaiProject' => timestamp(),
    		// 'akhirProject' => timestamp(),
    		'idPegawai' => $faker->numberBetween(51,100),
    		'idPerusahaan' => $faker->numberBetween(1,50)
    		]);
    	}
    }
}
