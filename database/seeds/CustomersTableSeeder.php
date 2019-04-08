<?php

use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,500) as $index) {
	        DB::table('customers')->insert([
	            'name' => $faker->name,
	            'email' => $faker->email,
                'nomor_telepon' => $faker->e164PhoneNumber,
                'alamat' => $faker->address,
                'status' => 'Non Member',
	        ]);
	    }
    }
}
