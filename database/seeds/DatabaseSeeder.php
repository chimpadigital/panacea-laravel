<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
        	'name' => 'Mariana',
	        'email' => 'admin@admin.com',
	        'password' => bcrypt('secret'),
	        'remember_token' => str_random(10),
        ]);
    }
}
