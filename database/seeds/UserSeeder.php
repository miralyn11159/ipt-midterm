<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Mensede',
                'fname' => 'Miralyn',
                'address' => 'Bohol',
                'phone' => '09245125',
                'email' => 'Miralyn@email.com',
                'password' => bcrypt('Miralyn')
            ],
            [
                'id' => 2,
                'lname' => 'Tiktokerist',
                'fname' => 'Miralyn',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'Miralyn@email.com',
                'password' => bcrypt('Miralyn')
            ],
            [
                'id' => 3,
                'lname' => 'Miralyn',
                'fname' => 'Mitty',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Miralyn@email.com',
                'password' => bcrypt('Miralyn')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
