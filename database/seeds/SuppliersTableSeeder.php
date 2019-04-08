<?php

use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
	        DB::table('suppliers')->insert([
	            'name' => $faker->company,
	            'email' => $faker->email,
                'nomor_telepon' => $faker->e164PhoneNumber,
                'contact_person' => $faker->name,
                'alamat' => $faker->address,
	        ]);
	    }
    }
}
