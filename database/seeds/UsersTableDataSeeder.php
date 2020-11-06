<?php

use App\Donor;
use Illuminate\Database\Seeder;
use App\User;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = User::create([
            'is_admin' => 1,
            'name' => 'Super Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678')
        ]);

        $donor['user_id']= $data->id;
        $donor['name']= $data->name;
        $donor['mobile']= $data->username;
        Donor::create($donor);
    }
}
