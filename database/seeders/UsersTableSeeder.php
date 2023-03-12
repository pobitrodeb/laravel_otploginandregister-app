<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pobitro Debnath',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OcX4CaFrqPwtQUwhyBwZnuzRYVbNnUKuJ4VNRMBxdJYJQP4hlXKcC',
                'remember_token' => NULL,
                'created_at' => '2023-03-12 15:10:51',
                'updated_at' => '2023-03-12 15:10:51',
                'mobile_no' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Jone Doe',
                'email' => 'user@user.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xGBjpMs3a8XO1cf5Pc7sVOmSNmVQNshGuwDeoLJ/nKtA5mdCcQd8a',
                'remember_token' => NULL,
                'created_at' => '2023-03-12 15:28:59',
                'updated_at' => '2023-03-12 15:28:59',
                'mobile_no' => '01888033708',
            ),
        ));
        
        
    }
}