<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Faker\Factory;
use App\Models\User;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users'); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();
		DB::table('activations')->truncate();

		$admin = User::create(array(
			'email'       => 'admin@admin.com',
			'password'    => bcrypt("admin"),
            'permissions' => json_encode(array('admin' => 1)),
			'first_name'  => 'John',
            'last_login' =>   Carbon::now()->format('Y-m-d H:i:s'),
			'last_name'   => 'Doe',
			'updated_at' =>   Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')

		));

		$adminRole = Role::create([
			'name' => 'Admin',
			'slug' => 'admin',
			'permissions' => json_encode(array('admin' => 1)),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>   Carbon::now()->format('Y-m-d H:i:s'),

		]);

       

		$admin->roles()->attach($adminRole);
		$this->command->info('Admin User created with username admin@admin.com and password admin');
        // \App\Models\User::factory(10)->create();
    }
}
