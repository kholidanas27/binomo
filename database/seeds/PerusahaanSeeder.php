<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PerusahaanSeeder extends Seeder
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

    	for($i = 1; $i <= 50; $i++){

    		DB::table('perusahaan')->insert([
    		'namaPerusahaan' => $faker->company,
    		'namaPekerjaan' => $faker->jobTitle(25)
    		]);
    	}
    }
}