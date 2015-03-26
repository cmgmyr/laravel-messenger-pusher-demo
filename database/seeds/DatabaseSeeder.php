<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Md\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        User::create([
            'first_name' => 'Chris',
            'last_name' => 'Gmyr',
            'email' => 'chris@example.com',
            'password' => Hash::make('pass123')
        ]);

        User::create([
            'first_name' => 'Taylor',
            'last_name' => 'Otwell',
            'email' => 'taylor@example.com',
            'password' => Hash::make('pass123')
        ]);
	}

}
